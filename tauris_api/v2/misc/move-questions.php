<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function moveQuestions() {
		$query = "UPDATE bets_quiz_question SET 
			test = 999,
			case_id = 999
		WHERE 
			case_id = 11 AND format_id = 1
		ORDER BY id DESC 
		LIMIT 5";
		// echo $query;

			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('update_query', null);
			}

		doSuccess(null, null);
	}

	moveQuestions(); // Make call and return response



?>