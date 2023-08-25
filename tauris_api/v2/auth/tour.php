<?php
	include('../inc/common.php');

	verifyMethod("GET", $_SERVER["REQUEST_METHOD"]); // Check Request Method 

	function getTourSlides() { 		
		$query = "SELECT * FROM bets_jobs_app_tour WHERE status = 1 ORDER BY ordering ASC";
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_query', null);
		}
		
		if(mysqli_num_rows($result) > 0) {
			$count = mysqli_num_rows($result);
			while( $data = mysqli_fetch_assoc($result) ){ 
				$response[] = $data;
			}
		}else{
			$count = 0;
			$response = [];
		}

		doSuccess($response, $count);
	}

	getTourSlides(); // Make call and return response
?>
