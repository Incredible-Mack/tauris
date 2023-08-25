<?php
	include('../inc/common.php');

	verifyMethod("GET", $_SERVER["REQUEST_METHOD"]); // Check Request Method 
	
	function createUserAccount() {
		$id = $_GET["id"];

		$query = "SELECT * FROM bets_user WHERE id = $id";
			if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('select_detail_query', null);
			}
			
		if(mysqli_num_rows($result) > 0) {
			$data = mysqli_fetch_assoc($result);
			$response = $data;
		}

		doSuccess($response, null);
	}

	createUserAccount(); // Make call and return response
?>