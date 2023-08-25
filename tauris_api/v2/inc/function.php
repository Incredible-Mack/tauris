<?php

    // Twilio SMS API
    $GLOBALS['AccountSid'] = "AC7f6d1fb6f2e246f11ed6ae10fd6d0acf";
    $GLOBALS['AuthToken'] = "290a684802c8acb9eaaacb533ae98e52";
    $GLOBALS['AuthPhoneNo'] = "+16463629535";
    $GLOBALS['baseUrl'] = "http://localhost/tauris_api/v2/"; // Development
    $GLOBALS['storageUrl'] = "http://localhost/tauris_api/v2/storage/"; // Development
    // $GLOBALS['baseUrl'] = "https://api.tauris.app/v2/"; // Production
    // $GLOBALS['storageUrl'] = "https://admin.tauris.app/_lib/file/"; // Production
    
	include('db_config.php');
	
    // API Error Handler
	function getErrors($err) {
		switch($err) {
			case 'credential':
				$error = "Error: Access Denied";
				$description = "Invalid API Credential. Please contact Tauris Tech Support.";
				break;
			case 'method':
				$error = "Error: Method not Allowed";
				$description = "Please consult Tauris Tech API Documentation for allowed Method for this call.";
				break;
			case 'parameter':
				$error = "Error: Could not Retrieve Data";
				$description = "The Server could to return required Data. Please contact Tauris Tech Support.";
				break;
			case 'firebase_header':
				$error = "Error: Missing Firebase User ID";
				$description = "App in Firebase Mode - Firebase ID of this User is required. Please contact Tauris Tech Support.";
				break;
			case 'firebase_record':
				$error = "Error: Firebase Record not found";
				$description = "ID of this User is not found in Google Firebase. Please contact Tauris Tech Support.";
				break;
			case 'student':
				$error = "Error: Missing App User";
				$description = "App User Id is required. Please consult Tauris Tech API Documentation for additional information.";
				break;
			case 'language':
				$error = "Error: Unrecognized Language";
				$description = "Could not recognize language (e.g English, Spanish). Please consult Tauris Tech API Documentation for additional information.";
				break;
			case 'mode':
				$error = "Error: Unknown Delivery Mode";
				$description = "Could not recognize mode (e.g Listening, Reading). Please consult Tauris Tech API Documentation for additional information.";
				break;
			case 'session':
				$error = "Error: Session Not Declared";
				$description = "User Session is required. Please consult Tauris Tech API Documentation for additional information.";
				break;
			case 'nocall':
				$error = "Error: Invalid Call";
				$description = "API Call not Allowed. Please contact Tauris Tech Support.";
				break;
			default:
				$error = "Unknown Error";
				$description = "Please contact Tauris Tech Support.";
				break;
		}

		$data = array(
			'status' => 0,
			'message' => $error,
			'description' => $description,
		);
		header('Content-Type: application/json');
		echo json_encode($data);
        exit();
	}

	// Pre-fetch Lookup Options
	function getOptions($option) {
		$filter = " WHERE status = 1";
		$query = "SELECT slug FROM bets_option_$option".$filter;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
			if(mysqli_num_rows($result) > 0) {
				$response = [];
				while( $data = mysqli_fetch_assoc($result) ) {
					array_push($response, $data["slug"]);
				}
			}
		return json_encode($response);
	}

    // Request Method Handler
	function verifyMethod($allowed, $requested) {
		if($allowed !== $requested) {
			getErrors('method');
		}
	}

    // Headers Handler
	function verifyHeaders() {
		
		print_r($GLOBALS['apiheader']);
		echo $GLOBALS['apiheader']['User-Agent'];
		//echo $GLOBALS['dev_mode'];
		exit;
		// Check API Credential
		$filter = " WHERE id = ".$GLOBALS['apiheader']['App-Id']." AND app_key = '".$GLOBALS['apiheader']['App-Key']."' AND app_secret = '".$GLOBALS['apiheader']['App-Secret']."' AND status = 1";
		$query = "SELECT * FROM api_credentials".$filter;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
			if($total == 0) {
				getErrors('credential');
			}

		// Check for App User
		$student_id = (int)$GLOBALS['apiheader']['Student-Id']+0;
			if($student_id == 0 || $student_id == '') {
				getErrors('student');
			}

		// Check for Session
		$session = $GLOBALS['apiheader']['App-Session'];
			if($session == '') {
				getErrors('session');
			}

		// Check for Language 
		$languages = json_decode(getOptions('language'));
			if(!in_array($GLOBALS['apiheader']['Language-Mode'], $languages)) {
				getErrors('language');
			}

		// Check for Delivery Mode
		$modes = json_decode(getOptions('mode'));
			if(!in_array($GLOBALS['apiheader']['Learning-Mode'], $modes)) {
				getErrors('mode');
			}
	}


    // Headers Handler
	function verifyHeaderssdsd() {
		
		// print_r($GLOBALS['apiheader']);
		// echo $GLOBALS['apiheader']['User-Agent'];
		//echo $GLOBALS['dev_mode'];
		// exit;
		// Check API Credential
		$filter = " WHERE id = '97627' AND app_key = 'C8762BA5675574D3F0D6344DBAE33A66' AND app_secret = '4CB4768206F76B95FC2B1AE6A194F42D' AND status = 1";
		$query = "SELECT * FROM api_credentials".$filter;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
		$total = mysqli_num_rows($result);
			if($total == 0) {
				getErrors('credential');
			}

		// Check for App User
		$student_id = (int)$GLOBALS['apiheader']['Student-Id']+0;
			if($student_id == 0 || $student_id == '') {
				getErrors('student');
			}

		// Check for Session
		$session = $GLOBALS['apiheader']['App-Session'];
			if($session == '') {
				getErrors('session');
			}

		// Check for Language 
		$languages = json_decode(getOptions('language'));
			if(!in_array($GLOBALS['apiheader']['Language-Mode'], $languages)) {
				getErrors('language');
			}

		// Check for Delivery Mode
		$modes = json_decode(getOptions('mode'));
			if(!in_array($GLOBALS['apiheader']['Learning-Mode'], $modes)) {
				getErrors('mode');
			}
	}

    // Request Method Handler
	function verifyParameter($id) {
		if(!isset($id) || $id == '') {
			getErrors('parameter');
		}
	}

    // API Call Success Handler
	function doSuccess($data, $count) {
		$developer_data = array(
			'App-Id' => $GLOBALS['apiheader']['App-Id'],
			'App-Key' => $GLOBALS['apiheader']['App-Key'],
			'App-Secret' => $GLOBALS['apiheader']['App-Secret'],
			'Firebase-Id' => $GLOBALS['apiheader']['Firebase-Id'],
			'Student-Id' => $GLOBALS['apiheader']['Student-Id']+0,
			'Language-Mode' => $GLOBALS['apiheader']['Language-Mode'],
			'Learning-Mode' => $GLOBALS['apiheader']['Learning-Mode'],
			'Device-Platform' => $GLOBALS['apiheader']['Device-Platform'],
			'Network-Connection' => $GLOBALS['apiheader']['Network-Connection'],
			'Ip-Address' => $GLOBALS['apiheader']['Ip-Address'],
			'App-Session' => $GLOBALS['apiheader']['App-Session'],
		);
        $response = array(
            'status' => 1,
            'message' => 'Success',
            'total_records' => $count,
			'developer_data' => $developer_data,
            'data' => $data,
        );
		if(!$GLOBALS['dev_mode']) {
			unset($response["developer_data"]);
		}
        header('Content-Type: application/json');
        echo json_encode($response);
	}

    // API Call Success Handler
	function doApiSuccess($data) {
        $response = array(
            'status' => 1,
            'message' => 'Success',
            'data' => $data,
        );
        header('Content-Type: application/json');
        echo json_encode($response);
	}

    // API Call Error Handler
	function doError() {
        $response = array(
            'status' => 0,
            'message' => 'No Records',
			'Firebase-Id' => $GLOBALS['apiheader']['Firebase-Id'],
			'Student-Id' => $GLOBALS['apiheader']['Student-Id']+0,
			'Language-Mode' => $GLOBALS['apiheader']['Language-Mode'],
			'Learning-Mode' => $GLOBALS['apiheader']['Learning-Mode'],
			'Device-Platform' => $GLOBALS['apiheader']['Device-Platform'],
			'Network-Connection' => $GLOBALS['apiheader']['Network-Connection'],
			'Ip-Address' => $GLOBALS['apiheader']['Ip-Address'],
			'App-Session' => $GLOBALS['apiheader']['App-Session'],
            'data' => [],
        );
        header('Content-Type: application/json');
        echo json_encode($response);
	}

    // API Call Error Handler
	function doApiError() {
        $response = array(
            'status' => 1,
            'message' => 'No APIs',
            'data' => [],
        );
        header('Content-Type: application/json');
        echo json_encode($response);
	}

    // API Call Success Handler
	function doApiList($data) {
		$header = array(
			'App-Id' => '{credential: id}',
			'App-Key' => '{credential: hashed}',
			'App-Secret' => '{credential: hashed}',
			'Firebase-Id' => '{credential: hashed}',
			'Student-Id' => '{id} - [e.g 2633]',
			'Language-Mode' => '{value} - [e.g en, es]',
			'Learning-Mode' => '{value} - [e.g voice, text]',
			'Device-Platform' => '{value} - [e.g android, ios, macos, windows]',
			'Network-Connection' => '{value} - [e.g wifi, mobile]',
			'Ip-Address' => '{value} - [e.g 191.240.23.871]',
			'App-Session' => '{session: hashed}'
		);
        $response = array(
            'required_headers' => $header,
            'data' => $data,
        );
        header('Content-Type: application/json');
        echo json_encode($response);
	}

	function removeBreaks($string) {
		str_replace(array("\n", "\r"), ' ', $string);
	}

	function randomString($count) {
		$characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
		$randomString = '';
	
		for ($i = 0; $i < $count; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
		
		return $randomString;
	}

	function encodeString($string) {
		$output = htmlentities($string, ENT_QUOTES, 'UTF-8');
		return urlencode($output);
	}

	function decodeString($string) {
		$output = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
		return urldecode($output);
	}

	verifyHeaders(); // Verify Header Parameters 
?>