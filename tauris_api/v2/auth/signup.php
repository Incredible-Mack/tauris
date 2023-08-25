<?php
	include('../inc/common.php');
	include '../phpqrcode/qrlib.php';

	verifyMethod("POST", $_SERVER["REQUEST_METHOD"], null); // Check Request Method 

	function createUserAccount() {
		$postParameters = json_decode(file_get_contents('php://input'), true);
		$business_id = ($postParameters["business_id"]) ? $postParameters["business_id"] : 0;
		$role_id = ($postParameters["role_id"]) ? $postParameters["role_id"] : 0;
		$is_jobsapp = ($postParameters["is_jobsapp"]) ? $postParameters["is_jobsapp"] : 0;
		$firstname = $postParameters["firstname"];
		$lastname = $postParameters["lastname"];
		$email = $postParameters["email"];
		$phone = $postParameters["phone"];
		$password = md5($postParameters["password"]);
		checkIfUserExist($email, $phone);
		$rand = rand(22222,99999);
		$code = md5($rand);
		$time = time();
		
		$query = "INSERT INTO bets_user SET business_id = $business_id, role_id = $role_id, is_jobsapp = $is_jobsapp, firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', password = '$password', activation_code = '$code', activation_code_raw = '$rand', activation_code_time = $time";
		// echo $query; exit;

		
			if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
				triggerError('insert_query', null);
			}

      $id = mysqli_insert_id($GLOBALS['dbConnect']);

      if($id) { 
			createWallet($id);
			// createQrCode($id);
			sendNotification("account-activation", $firstname, $lastname, $email, $phone, $rand);
         doSuccess(null, null);
      }else{
			triggerError('failed_signup', null);
      }
   }
	
	function createWallet($id) {
		$query = "INSERT INTO bets_wallet_user SET user_id = $id";
		if(!mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('insert_query', null);
		}
	}

	function checkIfUserExist($email, $phone) {
		$phone_plain = str_replace(array("(", ")", " ", ".", "-"), array("", "", "", "", ""), $phone);
		// debugModeExit($phone_plain);
		$query = "SELECT * FROM bets_user WHERE email = '$email' OR phone = '$phone' OR phone = '$phone_plain'";
		 
		if(!$result = mysqli_query($GLOBALS['dbConnect'], $query)) {
			triggerError('select_detail_query', null);
		}

		$data = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0) {
			if($data["deleted"] == 1) {triggerError('deleted', $email);}
         if($data["phone"] == $phone_plain) {triggerError('phone_exist', $phone);}
			if($data["email"] == $email) {triggerError('user_exist', $email);}
		}
	}

	function sendNotification($action, $firstname, $lastname, $email, $phone, $code) {
		$message_data = array(
			'action' => $action,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'phone' => $phone,
			'code' => $code,
			'send_email' => true,
			'send_sms' => true
		);
		notificationHandler($message_data);
	}

	function createQrCode($id) {
		$path = 'qrcodes/'; 
		$data = $id;
		$qrcode = $path.$id.'.png';

		$ecc = 'L'; 
		$pixel_size = 10; 
		$frame_size = 3; 

		QRcode::png($data, $qrcode, $ecc, $pixel_size, $frame_size);
	}

	createUserAccount(); // Make call and return response
?>
