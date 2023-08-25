<?php
	include('../inc/common.php');

	verifyMethod("GET", $_SERVER["REQUEST_METHOD"]); // Check Request Method 
	verifyParameter($_GET['id']); // Check Get Parameters 

	function getDetail() {
		$id = $_GET['id'];
		$query = "SELECT * FROM bets_pages WHERE slug = '$id'";
			if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('select_detail', $id);
			}
		
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if(mysqli_num_rows($result) > 0) {
			$data["body"] = htmlspecialchars_decode($data["body"], ENT_QUOTES);
			$response = $data;

			doSuccess($response, $count);
		}else{
			triggerError(null, null);
		}
	}

	getDetail();
?>