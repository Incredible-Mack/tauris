<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method  
	
	function userLogout() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["id"];

		$query = "UPDATE bets_user SET api_token = NULL WHERE id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}

		createUserLoginAuditLog($id);
		doSuccess(null, null);
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
		$query = "UPDATE bets_user_login_session SET logout = CONCAT_WS(', ', logout, $time) WHERE user_id = $id";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}
	}

	function createNewSessionLog($id) {
		$time = time();
		$query = "INSERT INTO bets_user_login_session SET user_id = $id, login = $time, logout = $time";
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('insert_query');
			}
	}
	
	userLogout(); // Make call and return response
?>