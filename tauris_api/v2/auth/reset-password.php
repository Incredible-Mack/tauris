<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function resetPassword() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$email = $postParameters["email"];
		$code = md5($postParameters["code"]);
		$code_raw = $postParameters["code"];
		$new_password = md5($postParameters["password"]);
		
		$query = "SELECT * FROM bets_user WHERE email = '$email'";
			if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('select_detail_query', null);
			}

		$data = mysqli_fetch_assoc($result);
		$id = $data["id"];

			if($data["deleted"] == 1) { 
				triggerError('deleted', $email);
			}

			if($data["password_reset_mode"] == 0 || $data["password_reset_code"] == '') {
				triggerError('invalid_reset', $email);
			}

			if($data["password_reset_code"] !== $code) {
				triggerError('invalid_reset_code', $code_raw);
			}

			// Check if Code has expired 
			$time_lapse = (time() - $data["password_reset_time"]);
			if($time_lapse > 300) {
				triggerError('expired_code', null);
			}

		$query = "UPDATE bets_user SET 
			password = '$new_password', 
			password_reset_mode = 0, 
			password_reset_code = NULL, 
			password_reset_code_raw = NULL
			WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
		
		sendNotification("password-reset-complete", $data["firstname"], $data["lastname"], $data["email"], $data["phone"]);
		doSuccess(null, null);
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

	resetPassword(); // Make call and return response
?>
