<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function getUserData() { 
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$id = $postParameters["id"];
		
		$query = "SELECT * FROM bets_user WHERE id = $id";
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
		$response = [];
		
		if($total > 0) {
			$response = mysqli_fetch_assoc($result);
		}

		doSuccess($response, $total);
	}

	getUserData(); // Make call and return response
?>
