<?php
	// Twilio SMS API
//	require __DIR__ . '/../Twilio/autoload.php';

//use Twilio\Exceptions\TwilioException;
//use Twilio\Rest\Client;

    // Request Method Handler
    function verifyMethod($allowed, $requested) {
        if($allowed !== $requested) {
            triggerError('method', null);
        }
    }

    // Headers Handler
	function verifyHeaders() {
		// Check API Credential
		$filter = " WHERE app_key = '".$GLOBALS['apiheader']['App-Key']."' AND app_secret = '".$GLOBALS['apiheader']['App-Secret']."' AND status = 1";
		$query = "SELECT * FROM api_credentials".$filter;
		$result = mysqli_query($GLOBALS['dbConnect'], $query);
			if(mysqli_num_rows($result) == 0) {
				triggerError('credential', null);
			}

		// Check for App User
		$student_id = (int)$GLOBALS['apiheader']['Student-Id']+0;
			if($student_id == 0 || $student_id == '') {
				triggerError('student', null);
			}

		// Check for Session
		$session = $GLOBALS['apiheader']['App-Session'];
			if($session == '') {
				triggerError('session', null);
			}

		// Check for Language 
		$languages = json_decode(getOptions('language'));
			if(!in_array($GLOBALS['apiheader']['Language-Mode'], $languages)) {
				triggerError('language', null);
			}

		// Check for Delivery Mode
		$modes = json_decode(getOptions('mode'));
			if(!in_array($GLOBALS['apiheader']['Learning-Mode'], $modes)) {
				triggerError('mode', null);
			}
	}

    // Request Method Handler
	function verifyParameter($id) {
		if(!isset($id) || $id == '') {
			triggerError('parameter', null);
		}
	}

    // API Call Success Handler
	 function doSuccess($data, $count) {
        $response = array(
            'status' => 1,
            'message' => 'Success',
            'total_records' => $count,
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
				createSendSms($GLOBALS['AccountSid'], $GLOBALS['AuthToken'], $GLOBALS['AuthPhoneNo'], $message_data["phone"], $message->sms_message);
				
			}
		}
	}
	
	function createSendEmail($to, $subject, $body) {
		// debugModeExit($to." | ".$subject." | ".$body);
		// echo "Sent Email";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Tauris Tech LLC <admin@tauris.app>' . "\r\n";
		$headers .= 'Bcc: registration@tauristech.org' . "\r\n";
		// $headers .= 'Bcc: tosinorogun@gmail.com' . "\r\n";
		// $headers .= 'Bcc: tosinorogun@gmail.com' . "\r\n";
		// $headers .= 'Cc: tosinorogun@gmail.com' . "\r\n";
		mail($to, $subject, $body, $headers);
	}
	
	function createSendEmailToMany($list, $subject, $body) {
		$to = "Tauris Tech LLC <admin@tauris.app>";
		// debugModeExit($to." | ".$subject." | ".$body);
		// echo "Sent Email";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Tauris Tech LLC <admin@tauris.app>' . "\r\n";
		$headers .= 'Bcc: '.$list . "\r\n";
		mail($to, $subject, $body, $headers);
	}
	
	function createSendSms($sid, $token, $from, $to, $message) {
		// debugModeExit($sid." | ".$token." | ".$from." | ".$to." | ".$message);

		$client = new Client($sid, $token);
		
		try {
			$client->account->messages->create(
				$to,
				array(
					'from' => $from, 
					'body' => $message
				)
			);
			// echo "Message sent to: ".$to; exit;
			// return true;
			// Successful - Do nothing

		} catch (TwilioException $e) {
			// echo "Error: ".$e; exit;
		}
	}
	
	function createSendSmsToMany($sid, $token, $from, $to, $message) {
		// debugModeExit($sid." | ".$token." | ".$from." | ".$to." | ".$message);
		$phone_numbers = explode(",", $to);

		$client = new Client($sid, $token);
		
		foreach ($phone_numbers as $to) {
			try {
				$client->account->messages->create(
					$to,
					array(
						'from' => $from, 
						'body' => $message
					)
				);
				// echo "Message sent to: ".$to; exit;
				// return true;
				// Successful - Do nothing

			} catch (TwilioException $e) {
				// echo "Error: ".$e; exit;
			}
		}
	}
	
	function createSendWhatsappMessage($sid, $token, $from, $to, $message) {
		// debugModeExit($sid." | ".$token." | ".$from." | ".$to." | ".$message);
		$phone_numbers = explode(",", $to);

		$client = new Client($sid, $token);
		
		foreach ($phone_numbers as $to) {
			try {
				$client->account->messages->create(
					$to,
					array(
						'from' => $from, 
						'body' => $message
					)
				);
				// echo "Message sent to: ".$to; exit;
				// return true;
				// Successful - Do nothing

			} catch (TwilioException $e) {
				// echo "Error: ".$e; exit;
			}
		}
	}

	function getDateDifference($start, $end) {
		$start = date_create($start); 
		$end = date_create($end); 
		$interval = date_diff($start, $end); 

		
		$years = $interval->y;
		$months = $interval->m;
		$day = $interval->days;
		
		$response = array(
			'year' => $years,
			'month' => $months,
			'day' => $day
		);
		// var_dump($response); exit();
		
		return $response;
	}

	function getTimeDifference($start, $end) {
		$start = date_create($start); 
		$end = date_create($end); 
		$interval = date_diff($start, $end); 
		
		$min = $interval->days * 24 * 60;
		$min += $interval->h * 60;
		$min += $interval->i;
		
		return $min;
	}

	function minutesToHours($mins) {
		$hours = floor($mins/60);
		$minutes = ($mins % 60);
		$hours_lang = ($hours < 2) ? "hr" : "hrs";
		$minutes_lang = ($minutes < 2) ? "min" : "mins";
		$hours_padded = str_pad($hours,2,"0",STR_PAD_LEFT);
		$minutes_padded = str_pad($minutes,2,"0",STR_PAD_LEFT);
		$full = $hours.$hours_lang.", ".$minutes_padded.$minutes_lang;

		$response = array(
			'hours'=> $hours,
			'minutes'=> $minutes,
			'hours_lang' => $hours_lang,
			'minutes_lang' => $minutes_lang,
			'hours_padded' => $hours_padded,
			'minutes_padded' => $minutes_padded,
			'full' => $full
		);
		// var_dump($response);
		// exit();
		return $response;
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

	function getTimeAgo($date, $timezone) {
		// Timezone example: America/New_York
		// Convert UTC time to local Time
		$utc_to_local = new DateTime($date, new DateTimeZone('UTC'));
		$utc_to_local->setTimezone(new DateTimeZone($timezone));
		$local_time = $utc_to_local->format('Y-m-d H:i:s T');
		// End Convert UTC time to local Time
		
		$database_time = strtotime($local_time);
		$current_time = time();
		$time_difference =  (int)$current_time - (int)$database_time;
	
		if ($time_difference < 1) {
			return 'less than 1 second ago';
		}
	
		if($time_difference < 60) {
			$chat_time = $time_difference." seconds ago";
			// Minutes difference
		}else if($time_difference >= 60 && $time_difference < 3600) {
			$min = number_format(($time_difference/60),0);
			$lang = ($min == 1) ? " minute ago" : " minutes ago";
			$chat_time = $min.$lang;
			// Hours difference
		}else if($time_difference >= 3600 && ($time_difference < 86400)) {
			$hrs = number_format(($time_difference/3600),0);
			$lang = ($hrs == 1) ? " hour ago" : " hours ago";
			$chat_time = $hrs.$lang;
			// Days in date
		}else if(($time_difference >= 3600) * 24) {
			$chat_time = date('D d, Y H:i:sA', $database_time);
		}
	
		return $chat_time;
		// To do: Add variations for Days, Weeks, Months, and Years ago
	}

	function utcTimeToLocalTime($date, $timezone) {
		$utc_to_local = new DateTime($date, new DateTimeZone('UTC'));
		$utc_to_local->setTimezone(new DateTimeZone($timezone));
		$result = $utc_to_local->format('Y-m-d H:i:s');

		return $result;
	}

	function utcDateToLocalDate($date, $timezone) {
		$utc_to_local = new DateTime($date, new DateTimeZone('UTC'));
		$utc_to_local->setTimezone(new DateTimeZone($timezone));
		$result = $utc_to_local->format('Y-m-d');

		return $result;
	}

	// Will output: (123) 456-7890
	function formatPhoneNumber($number) {
		$number = str_replace(array("(", ")", " ", ".", "-"), array("", "", "", "", ""), $number);
		if(strlen($number) != 10) {
			return "Invalid number";
		}

		$result = sprintf("(%s) %s-%s",
					substr($number, 0, 3),
					substr($number, 3, 3),
					substr($number, 6));

		return $result;
	}
	
	// For calculating execution time - review before use
	function microtime_float() {
		list($usec, $sec) = explode(" ", microtime());
		$result = ((float)$usec + (float)$sec);
		return $result;
	}

   function getFileIcon($ext) {
      switch ($ext) {
         case 'pdf':
            $icon = "<img src='../_lib/img/nm_icon_pdf.gif'>";
            break;

         case 'doc':
            $icon = "<img src='../_lib/img/nm_icon_doc.gif'>";
            break;

         case 'docx':
            $icon = "<img src='../_lib/img/nm_icon_doc.gif'>";
            break;

         case 'rtf':
            $icon = "<img src='../_lib/img/nm_icon_txt.gif'>";
            break;

         case 'xls':
            $icon = "<img src='../_lib/img/nm_icon_xls.gif'>";
            break;

         case 'xlsx':
            $icon = "<img src='../_lib/img/nm_icon_xls.gif'>";
            break;

         case 'csv':
            $icon = "<img src='../_lib/img/nm_icon_xls.gif'>";
            break;

         case 'ppt':
            $icon = "<img src='../_lib/img/nm_icon_ppt.gif'>";
            break;

         case 'pptx':
            $icon = "<img src='../_lib/img/nm_icon_ppt.gif'>";
            break;
         
         default:
            $icon = "<img src='../_lib/img/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_file.png'>";
            break;
      }
   }

	function encodeString($string) {
		$output = htmlentities($string, ENT_QUOTES, 'UTF-8');
		return urlencode($output);
	}

	function decodeString($string) {
		$output = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
		return urldecode($output);
	}
	
?>