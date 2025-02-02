<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function resetPassword() { 
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$email = $postParameters["email"];
		
		$query = "SELECT * FROM bets_user WHERE email = '$email'";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		$data = mysqli_fetch_assoc($result);

		if(mysqli_num_rows($result) > 0) {

			if($data["deleted"] == 1) { 
				triggerError('deleted', $email);
			}
			
			$code = createActivationCode($email);
			sendNotification("forgot-password", $data["firstname"], $data["lastname"], $data["email"], $data["phone"], $code);
		}else{
			triggerError('account_not_found', $email);
		}

		doSuccess(null, null);
	}

	function createActivationCode($email) { 
		$rand = rand(22222,99999);
		$code = md5($rand);
		$time = time();

		$query = "UPDATE bets_user SET password_reset_code = '$code', password_reset_code_raw = '$rand', password_reset_mode = 1, password_reset_time = $time WHERE email = '$email'";
		// echo $query; exit();
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
		return $rand;
	}

	function sendNotification($action, $firstname, $lastname, $email, $phone, $code) {
		$message_data = array(
			'action' => $action,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'phone' => $phone,
			'code' => $code,
			'send_email' => true,
			'send_sms' => true
		);
		notificationHandler($message_data);
	}

	resetPassword(); // Make call and return response
?>
