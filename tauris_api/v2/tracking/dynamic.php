<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function handleTrackingData() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$app_session = $postParameters["app_session"];
		$user_id = $postParameters["user_id"];
		$group_id = $postParameters["group_id"];
		$db = $postParameters["db_name"];
		$data_point = $postParameters["data_point"];
		$tracking_data = $postParameters["data_packet"];

		$db_name = "bets_tracking_".$db;
		$current_data = getCurrentSession($app_session, $db_name, $data_point);
		$id = $current_data["id"];
		$current_data = $current_data["cur_data"];

		($id) ? updateTrackingData($id, $data_point, $current_data, $db_name, $tracking_data) : insertTrackingData($app_session, $data_point, $user_id, $group_id, $db_name, $tracking_data);
	}

	// Create record for the first time.
	function insertTrackingData($app_session, $data_point, $user_id, $group_id, $db_name, $tracking_data) { 
		$tracking_data = json_encode(array($tracking_data));		
		$query = "INSERT INTO $db_name SET app_session = '$app_session', user_id = $user_id, group_id = '$group_id', $data_point = '$tracking_data'";

		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('insert_tracking_data', null);
		}

		doSuccess(null, null);
	}

	// Update existing session record
	function updateTrackingData($id, $data_point, $current_data, $db_name, $tracking_data) {
		$is_empty = ($current_data && $current_data != "") ? true : false;

		if(!$is_empty) {
			$existing = json_decode($current_data);
			array_push($existing, $tracking_data);
			$for_db = json_encode($existing);
		}else{
			$for_db = json_encode(array($tracking_data));
		}

		$query = "UPDATE $db_name SET $data_point = '$for_db' WHERE id = $id";
		// echo $query; exit();
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('update_tracking_data', null);
		}

		doSuccess(null, null);
	}

	function getCurrentSession($app_session, $db_name, $data_point) {
		$query = "SELECT id, $data_point AS cur_data FROM $db_name WHERE app_session = '$app_session'";
		// echo $query; exit();
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		if(mysqli_num_rows($result) > 0) { 
			$data = mysqli_fetch_assoc($result);
			$response = $data;
		}else{
			$response = null;
		}
		return $response;
	}
	
	handleTrackingData(); 
?>
