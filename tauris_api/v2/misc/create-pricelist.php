<?php
include('../inc/common.php');

verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

function performAction() {
	$query = "SELECT id FROM bets_course";
	$result = mysqli_query($GLOBALS['dbConnect'], $query);

	if (mysqli_num_rows($result) > 0) {
		while ($data = mysqli_fetch_assoc($result)) {
			$id = $data["id"];
			insertPriceList($id);
		}

		$status = 1;
		$message = "Successful!";
	}else{
		$status = 0;
		$message = "Failed!";
	}

	$response = array(
		'status' => $status,
		'message' => $message
	);
	header('Content-Type: application/json');
	echo json_encode($response);
	return;
}

function insertPriceList($id) {
	$limit = 3;
	$i = 1;
	while ($i <= $limit) {
		$entry = calculatePrice($i);
		$price = $entry["price"];
		$duration = $entry["duration"];

		$query = "INSERT INTO bets_product_pricing SET course_id = $id, price = '$price', duration = $duration";
		if (!mysqli_query($GLOBALS['dbConnect'], $query)) {
		  triggerError('insert_query', $query);
		}
		$i++;
	}
}

function calculatePrice($counter) {
	switch ($counter) {
		case 1:
			$duration = 1;
			$price = "100.00";
			break;
			
		case 2:
			$duration = 3;
			$price = "300.00";
			break;
			
		case 3:
			$duration = 6;
			$price = "600.00";
			break;
			
		case 4:
			$duration = 12;
			$price = "1200.00";
			break;
			
		case 5:
			$duration = 18;
			$price = "1800.00";
			break;
			
		case 6:
			$duration = 24;
			$price = "2400.00";
			break;
	}

	return array(
		'price' => $price,
		'duration' => $duration
	);
}

performAction(); // Make call and return response