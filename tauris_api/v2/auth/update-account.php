<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function createUserAccount() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = (int)$postParameters["id"];
		$firstname = $postParameters["firstname"];
		$lastname = $postParameters["lastname"];
		$email = $postParameters["email"]; 
		$phone = $postParameters["phone"]; 
		checkIfUserExist($id, $email, $phone); 

		$query = "UPDATE bets_user SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone' WHERE id = $id";
		// echo $query;

			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}

			doSuccess(null, null);
	}

	function checkIfUserExist($id, $email, $phone) {
		$query = "SELECT * FROM bets_user WHERE (email = '$email' OR phone = '$phone') AND id != $id";
		// echo $query; 
			if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('select_detail_query', null);
			}
		if(mysqli_num_rows($result) > 0) {

			$data = mysqli_fetch_assoc($result);
			if($data["email"] == $email) {
				triggerError('email_exist', $email);
			}
			if($data["phone"] == $phone) {
				triggerError('phone_exist', $phone);
			}
		}
	}

	createUserAccount(); // Make call and return response
?>