<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function generateOTPLogic() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		// var_dump($postParameters); exit;
		// $id = $postParameters["user"];
		$code = $postParameters["code"];
		$tester_otp_array = array(10001, 10002, 10003, 10004, 10005);
		$is_tester = (in_array($code, $tester_otp_array)) ? true : false;
		
		// Status 1 means the code has not been used
		$query = "SELECT * FROM bets_vr_otp WHERE otp_raw = $code ORDER BY id DESC LIMIT 1";
		// echo $query; exit;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		
		if(mysqli_num_rows($result) > 0) {
			$data = mysqli_fetch_assoc($result);
			$time = time();

			if($data["otp_used"] == 0) {
				triggerError('code_used', null);
			}
			
			if($data["otp_used"] == 2) { 
				triggerError('code_cancelled', null);
			}

			if((int)$data["otp_expiry"] < $time) {
				triggerError('expired_code', null);
			}

			// Start login process
			userLogin($data["user_id"], $data["id"], $is_tester);
		}else{
			triggerError('invalid_code', $code);
		}
	}

	function changeOtpStatus($id) {
		$query = "UPDATE bets_vr_otp SET otp_used = 0 WHERE id = $id";
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('update_query', null);
		}
	}

	function userLogin($id, $otp, $is_tester) {
		$query = "SELECT bets_user.id, bets_user.user_group, bets_user.biometric_id, bets_user.username, bets_user.business_id, bets_business_firebase.name AS business, bets_user.role_id, bets_user.is_instructor, bets_user.firstname, bets_user.lastname, bets_user.email, bets_user.phone, bets_user.avatar, bets_user.gender, bets_user.address, bets_user.city, bets_user.state, bets_user.zip, bets_user.country, bets_user.date_of_birth, bets_user.ssn, bets_user.verified, bets_user.api_token AS token, bets_user.status, bets_user.activated, bets_user.deleted, bets_user.password, bets_user.push_notification, bets_user.email_notification, bets_user.sms_notification FROM bets_user LEFT JOIN bets_business_firebase ON bets_user.business_id = bets_business_firebase.id WHERE bets_user.id = $id";
		// echo $query;
		
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}

		$data = mysqli_fetch_assoc($result);
		$rows = mysqli_num_rows($result);
		$data["role"] = ($data["role_id"] == 1) ? "student" : "admin";
		
		if($rows > 0) { 

			if($data["deleted"] == 1) { 
				triggerError('deleted', $data["email"]);
			}

			if($data["activated"] == 0) { 
				triggerError('inactive_account', $data["firstname"]);
			}

			if($data["status"] == 0) { 
				triggerError('suspension', $data["firstname"]);
			}

			unset($data["password"], $data["status"], $data["activated"]);
			$data["token"] = getSessionToken($data["id"]);

			createUserLoginAuditLog($data["id"]);
			$username_formed = $data["firstname"] . "6".$data["id"]."3";
			$data["username"] = ($data["username"]) ? $data["username"] : $username_formed;
			
			$data["username"] = ucfirst($data["username"]);
			$data["hashed"] = md5($data["id"]);
			$data["role_id"] = (int)$data["role_id"];
			$data["business_id"] = (int)$data["business_id"];
			$data["verified"] = (int)$data["verified"];
			$data["push_notification"] = (int)$data["push_notification"];
			$data["email_notification"] = (int)$data["email_notification"];
			$data["sms_notification"] = (int)$data["sms_notification"];
			$data["stripe_account"] = getStripeAccountId($data["id"]);
			$data["has_trial"] = getTrial($data["id"]);
			
			$response = $data;
			if(!$is_tester) { // Don't set OTP to used if it is a tester account
				changeOtpStatus($otp);
			}
			doSuccess($response, null);
		}else{
			triggerError('account_not_found', $data["email"]);
		}
	}

	function getTrial($user_id) {
		$query = "SELECT * FROM bets_course_trial WHERE user_id = $user_id AND time_allowed > time_used AND status = 1";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);

		if(mysqli_num_rows($result) > 0) {
			$response = true;
		}else{
			$response = false;
		}

		return $response;
	}

	function getStripeAccountId($id) {
		$query = "SELECT stripe_account_id, onboarding_payment, onboarding_documents, onboarding_complete, login_link FROM bets_stripe_account WHERE user_id = $id";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		$total_row = mysqli_num_rows($result);

		if($total_row > 0) {
			$data = mysqli_fetch_assoc($result);
			$stripe_account = array(
				'id' => $data["stripe_account_id"],
				'payment' => (int)$data["onboarding_payment"],
				'documents' => (int)$data["onboarding_documents"],
				'complete' => (int)$data["onboarding_complete"],
				'login_link' => $data["login_link"]
			);
		}else{
			$stripe_account = array(
				'id' => null,
				'payment' => 0,
				'documents' => 0,
				'complete' => 0,
				'login_link' => null
			);
		}
		
		return $stripe_account;
	}
	
	function getSessionToken($id) {
		$token = md5(time().rand());
		
		$query = "UPDATE bets_user SET api_token = '$token' WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}

		return $token;
	}

	function createUserLoginAuditLog($id) {
		$time = time();
		$query = "SELECT id FROM bets_user_login_session WHERE user_id = $id";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total_row = mysqli_num_rows($result);

		if($total_row == 0) {
			createNewSessionLog($id);
		}else{
			updateCurrentSessionLog($id);
		}
	}

	function updateCurrentSessionLog($id) {
		$time = time();
		$query = "UPDATE bets_user_login_session SET login = CONCAT_WS(', ', login, $time) WHERE user_id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
	}

	function createNewSessionLog($id) {
		$time = time();
		$query = "INSERT INTO bets_user_login_session SET user_id = $id, login = $time";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('insert_query', null);
			}
	}
	
	generateOTPLogic(); // Make call and return response
?>