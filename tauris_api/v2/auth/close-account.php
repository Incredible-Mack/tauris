<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function closeUserAccount() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["id"];

		if($id == "") {
			triggerError(null, null);
		}

		$query = "SELECT * FROM bets_user WHERE id = $id";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}
		$data = mysqli_fetch_assoc($result);
		
		$query = "UPDATE bets_user SET deleted = 1, status = 1, api_token = NULL WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('delete_query', null);
			}

      // sendNotification("account-closed", $data["firstname"], $data["lastname"], $data["email"], $data["phone"]);
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

	closeUserAccount(); // Make call and return response
?>