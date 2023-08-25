<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function activateUserAccount() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$role_id = ($postParameters["role_id"]) ? $postParameters["role_id"] : 0;
		$is_jobsapp = ($postParameters["is_jobsapp"]) ? $postParameters["is_jobsapp"] : 0;
		$email = $postParameters["email"];
		$code = md5($postParameters["code"]);
		$code_raw = $postParameters["code"];
		
		$query = "SELECT * FROM bets_user WHERE email = '$email'";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		
		$data = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0) {

			if($data["deleted"] == 1) { 
				triggerError('deleted', $email);
			}

			if($data["activated"] == 1) {
				triggerError('already_activated', $email);
			}

			if($data["activation_code"] == $code) {
			
				// Check if Code has expired 
				$time_lapse = (time() - $data["activation_code_time"]);
				if($time_lapse > 300) {
					triggerError('expired_code', null);
				}

				$query = "UPDATE bets_user SET activation_code = NULL, role_id = $role_id, is_jobsapp = $is_jobsapp, activation_code_raw = NULL, activated = 1, status = 1 WHERE email = '$email'";
				mysqli_query($GLOBALS['dbConnect'], $query);

				authenticateUser($data["email"], $data["password"]);

			}else{
				triggerError('invalid_activation', $code_raw);
			}
		}else{
			triggerError('account_not_found', $email);
		}
	}

	function authenticateUser($email, $password) {
		// $query = "SELECT id, business_id, role_id, firstname, lastname, email, phone, avatar, verified, api_token AS token, status, password, push_notification, email_notification, sms_notification FROM bets_user WHERE email = '$email' AND password = '$password'";
		$query = "SELECT bets_user.id, bets_user.user_group, bets_user.biometric_id, bets_user.username, bets_user.business_id, bets_business_firebase.name AS business, bets_user.role_id, bets_user.is_instructor, bets_user.is_instructor, bets_user.firstname, bets_user.lastname, bets_user.email, bets_user.phone, bets_user.avatar, bets_user.verified, bets_user.api_token AS token, bets_user.status, bets_user.activated, bets_user.password, bets_user.push_notification, bets_user.email_notification, bets_user.sms_notification FROM bets_user LEFT JOIN bets_business_firebase ON bets_user.business_id = bets_business_firebase.id WHERE bets_user.email = '$email' AND bets_user.password = '$password'";

		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		
		$data = mysqli_fetch_assoc($result);
		$data["role"] = ($data["role_id"] == 1) ? "student" : "admin";
		if(mysqli_num_rows($result) > 0) {
			
			unset($data["password"],$data["status"]);
			$username_formed = $data["firstname"] . "6".$data["id"]."3";
			$data["username"] = ($data["username"]) ? $data["username"] : $username_formed;
			
			$data["username"] = ucfirst($data["username"]);
			$data["hashed"] = md5($data["id"]);
			$data["token"] = getSessionToken($data["id"]);
			$data["role_id"] = (int)$data["role_id"];
			$data["business_id"] = (int)$data["business_id"];
			$data["verified"] = (int)$data["verified"];
			$data["push_notification"] = (int)$data["push_notification"];
			$data["email_notification"] = (int)$data["email_notification"];
			$data["sms_notification"] = (int)$data["sms_notification"];
			$data["stripe_account"] = getStripeAccountId($data["id"]);
			$data["has_trial"] = createTrial($data["id"]);
			
			$response = $data;
			createUserLoginAuditLog($data["id"]);
         sendNotification("account-activated", $data["firstname"], $data["lastname"], $data["email"], $data["phone"]);
			
			// if($data["has_trial"]) {
			// 	sendNotification("trial-access", $data["firstname"], $data["lastname"], $data["email"], $data["phone"]);
			// }

			doSuccess($response, null);
		}else{
			triggerError('failed_activation', $email );
		}
	}

	function createTrial($user_id) {
		global $trial_duration;
		global $trial_course;

		$course_list = explode(",", $trial_course);
		if($course_list) {
			$i = 0;
			while($i < count($course_list)) {
				$course_id = $course_list[$i];
				$query = "INSERT INTO bets_course_trial SET user_id = $user_id, course_id = $course_id, time_allowed = $trial_duration";
				if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
					triggerError('insert_query', null);
				}
				$i++;
			}
			$status = true;
		}else{
			$status = false;
		}

		return $status;
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
				'login_link' => $data["login_link"],
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

	function sendNotification($action, $firstname, $lastname, $email, $phone) {
		$message_data = array(
			'action' => $action,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'phone' => $phone,
			'send_email' => true,
			'send_sms' => true
		);
		notificationHandler($message_data);
	}

	activateUserAccount(); // Make call and return response
?>
