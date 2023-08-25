<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function handleTrackingData() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		// $app_session = md5(rand().time());
		$app_session = $postParameters["app_session"];
		$user_id = $postParameters["user_id"];
		$firebase_id = $postParameters["firebase_id"];
		$group_id = $postParameters["group_id"];
		$group_name = $postParameters["group_name"];
		$data_point = $postParameters["data_point"];
		$data_packet = array($postParameters["data_packet"]);
		$current_data = getCurrentSession($app_session);
		$id = $current_data["id"];
		($current_data) ? updateTrackingData($id, $data_point, $current_data, $data_packet) : insertTrackingData($app_session, $data_point, $user_id, $firebase_id, $group_id, $group_name, $data_packet);
	}

	function insertTrackingData($app_session, $data_point, $user_id, $firebase_id, $group_id, $group_name, $data_packet) { 
		// echo json_encode($data_packet);
		// exit();
		$data_packet = array($data_point => $data_packet);
		$new_data_packet = json_encode($data_packet);
		$query = "INSERT INTO bets_tracking_static SET app_session = '$app_session', user_id = $user_id, firebase_id = '$firebase_id', group_id = '$group_id', group_name = '$group_name', data_packet = '$new_data_packet'";
		// echo $query; exit();
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('insert_tracking_data', null);
		}
		doSuccess(null, null);
	}

	function updateTrackingData($id, $data_point, $current_data, $data_packet) {
		// echo json_encode($data_packet);
		// exit();

		$curr = json_decode($current_data["data_packet"], TRUE);
		$packet_exist = array_key_exists($data_point ,$curr) ? true : false;
		if($packet_exist) {
			// echo "exists";
			// exit();
			$new = $data_packet[0];
			$existing = $curr[$data_point];
			array_push($existing, $new);
			$curr[$data_point] = $existing; //Update entire object
			$new_data_packet = json_encode($curr);
		}else{
			$data_packet = array($data_point => $data_packet);
			$new_data_packet = json_encode(array_merge($curr, $data_packet));
			// echo $new_data_packet;
			// exit();
		}

		$query = "UPDATE bets_tracking_static SET data_packet = '$new_data_packet' WHERE id = $id";
		// echo $query; exit();
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('update_tracking_data', null);
		}
		doSuccess(null, null);
	}

	function getCurrentSession($app_session) {
		$query = "SELECT id, data_packet FROM bets_tracking_static WHERE app_session = '$app_session'";
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
