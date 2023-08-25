<?php

    // Twilio SMS API
    $GLOBALS['AccountSid'] = "AC7f6d1fb6f2e246f11ed6ae10fd6d0acf";
    $GLOBALS['AuthToken'] = "290a684802c8acb9eaaacb533ae98e52";
    $GLOBALS['AuthPhoneNo'] = "+16463629535";
    // $GLOBALS['baseUrl'] = "http://localhost:8888/api/v2/"; // Development
    // $GLOBALS['storageUrl'] = "http://localhost:8888/api/v2/storage/"; // Development
    $GLOBALS['baseUrl'] = "https://api.tauris.app/v2/"; // Production
    $GLOBALS['storageUrl'] = "https://admin.tauris.app/_lib/file/"; // Production
    
	include('headers.php');
	include('db_config.php');
	include('handlers.php');
	include('notification.php');

   // Request Method Handler
	function verifyMethod($allowed, $requested) {
		if($allowed !== $requested) {
			getErrors('method');
		}
	}

   // Headers Handler
	function verifyHeaders() {
		// echo "Globals: ".$GLOBALS['apiheader']['App-Id'];
		// Check API Credential
		$filter = " WHERE id = ".$GLOBALS['apiheader']['App-Id']." AND app_key = '".$GLOBALS['apiheader']['App-Key']."' AND app_secret = '".$GLOBALS['apiheader']['App-Secret']."' AND status = 1";
		$query = "SELECT * FROM api_credentials".$filter;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
			if(mysqli_num_rows($result) == 0) {
				getErrors('credential');
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

    // API Call Error Handler
	function doError() {
        $response = array(
            'status' => 0,
            'message' => 'No Records',
            'data' => [],
        );
        header('Content-Type: application/json');
        echo json_encode($response);
	}

	// API Call Auth Success Handler
	function doAuthSuccess($data) {
		$response = array(
			'status' => 1,
			'message' => 'Success',
			'data' => $data,
		);

		header('Content-Type: application/json');
		echo json_encode($response);
	}

	// Notification Handler (Email & SMS)
	function notificationHandler($message_data) {
		$message = json_decode(getNotificationMessage($message_data));
		if($message->status == 1) {
			if($message_data["send_email"]) {
				createSendEmail($message_data["email"], $message->email_subject, $message->email_message);
			}
			
			if($message_data["send_sms"]) {
				createSendSms($message_data["phone"], $message->sms_message);
			}
		}
	}
	
	function createSendEmail($to, $subject, $body) {
		// echo "Sent Email";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Tauris Tech LLC <admin@tauris.app>' . "\r\n";
		$headers .= 'Bcc: registration@tauristech.org' . "\r\n";
		// $headers .= 'Cc: tosinorogun@gmail.com' . "\r\n";
		// $headers .= 'Bcc: info@tauristech.org' . "\r\n";
		mail($to, $subject, $body, $headers);
	}
	
	function createSendSms($sms_message) {
		// echo "Sent SMS";
	}

	function encodeString($string) {
		$output = htmlentities($string, ENT_QUOTES, 'UTF-8');
		return urlencode($output);
	}

	function decodeString($string) {
		$output = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
		return urldecode($output);
	}

	function debugMode($data) {
		$response = array(
			'status' => 1,
			'message' => 'Testing',
			'data' => $data
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		return;
	}

	function debugModeExit($data = "No Data Passed") {
		$response = array(
			'status' => 1,
			'message' => 'Testing',
			'data' => $data
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
	}

	verifyHeaders(); // Verify Header Parameters 
?>