<?php
	include('../inc/common.php');

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function handleTrackingData() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		
		// debugMode($postParameters); exit();
		$current_data = getCurrentSession($postParameters["token"]);
		$id = $current_data["id"];
		($id) ? updateTrackingData($id) : insertTrackingData($postParameters);
	}

	// Create record for the first time.
	function insertTrackingData($postParameters) { 
		$app_session = $postParameters[0]["token"];
		$user_id = $postParameters[0]["user"];
		$lang = $postParameters[0]["lang"];
		$mode = $postParameters[0]["mode"];
		$ip = $postParameters["system_data"]["ip"];
		$country = $postParameters["system_data"]["country"];
		$city = $postParameters["system_data"]["city"];
		$state_name = $postParameters["system_data"]["state_name"];
		$state_code = $postParameters["system_data"]["state_code"];
		$continent = $postParameters["system_data"]["continent"];
		$latitude = $postParameters["system_data"]["latitude"];
		$longitude = $postParameters["system_data"]["longitude"];
		$timezone = $postParameters["system_data"]["timezone"];
		$platform = $postParameters["system_data"]["platform"];
		$os = $postParameters["system_data"]["os"];
		$browser = $postParameters["system_data"]["browser"];

		$query = "INSERT INTO bets_tracking SET 
		app_session = '$app_session', 
		user_id = $user_id, 
		lang = '$lang', 
		mode = '$mode', 
		entry_count = 1, 
		ip = '$ip', 
		country = '$country', 
		city = '$city', 
		state_name = '$state_name', 
		state_code = '$state_code', 
		continent = '$continent', 
		latitude = '$latitude', 
		longitude = '$longitude', 
		timezone = '$timezone', 
		platform = '$platform', 
		os = '$os', 
		browser = '$browser'";

		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('insert_tracking_data', null);
		}

		doSuccess(null, null);
	}

	// Update existing session record
	function updateTrackingData($id) {
		$query = "UPDATE bets_tracking SET entry_count = entry_count + 1 WHERE id = $id";
		// debugMode($query); exit();
		
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('update_tracking_data', null);
		}

		doSuccess(null, null);
	}

	function getCurrentSession($app_session) {
		$query = "SELECT id FROM bets_tracking WHERE app_session = '$app_session'";
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
