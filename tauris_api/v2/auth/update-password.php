<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function updatePassword() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["id"];
		$old_password = md5($postParameters["old_password"]);
		$new_password = md5($postParameters["new_password"]);
		
		$query = "SELECT * FROM bets_user WHERE id = $id";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		$data = mysqli_fetch_assoc($result);

		if($data["password"] != $old_password) {
			triggerError('password_mismatch', null);
		}
		
		if($data["password"] == $new_password) {
			triggerError('password_inuse', null);
		}

		$query = "UPDATE bets_user SET password = '$new_password' WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}

		sendNotification("password-update-complete", $data["firstname"], $data["lastname"], $data["email"], $data["phone"]);
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

	updatePassword(); // Make call and return response
?>
