<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function updatePassword() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["userId"];
		$push_notification = $postParameters["push"];
		$email_notification = $postParameters["email"];
		$sms_notification = $postParameters["sms"];

		$query = "UPDATE bets_user SET push_notification = $push_notification, email_notification = $email_notification, sms_notification = $sms_notification WHERE id = $id";
		// echo $query;
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
			
		doSuccess(null, null);
	}

	updatePassword(); // Make call and return response
?>
