<?php
	// Handles  transaction error message
	function triggerError($code, $data) {
		switch($code) {
			case 'credential':
				$message = "Error: API Access Denied";
				$description = "Invalid API Credential. Please contact Tauris Tech Support.";
				break;
			case 'method':
				$message = "Error: Method not Allowed";
				$description = "Please consult Tauris Tech API Documentation for allowed Method for this call.";
				break;
			case 'parameter':
				$message = "Error: Invalid Parameter";
				$description = "Please consult Tauris Tech API Documentation for allowed Parameters for this call.";
				break;
			case 'session':
				$message = "Error: Invalid User Session";
				$description = "Please consult Tauris Tech API Documentation for allowed Method for this call.";
				break;
			case 'select_query':
				$message = "Error: Failed to fetch Records";
				$description = "Could not fetch records due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'select_detail_query':
				$message = "Error: Failed to fetch Record";
				$description = "Could not fetch record due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'insert_query':
				$message = "Error: Failed to create Record";
				$description = "Could not create record due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'update_query':
				$message = "Error: Failed to update Record";
				$description = "Could not update record due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'update_all':
				$message = "Error: Failed to update Records";
				$description = "Could not update records due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'delete':
				$message = "Error: Failed to delete Record";
				$description = "Could not delete record due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'delete_all':
				$message = "Error: Failed to delete Records";
				$description = "Could not delete records due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'no_wallet':
				$message = "Error: Wallet Account not found";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'wallet_lock':
				$message = "Error: Wallet Account Locked";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'low_balance':
				$message = "Error: Wallet Balance Low! Please add funds to your Wallet to continue playing.";
				$description = "Please fund your Wallet to play";
				break;
			case 'user_exist':
				$message = "An Account with Email Address: $data already exists! If you forgot your password, you may request a reset.";
				$description = "Please login to your Account.";
				break;				
			case 'email_exist':
				$message = "An Account with Email Address: $data already exists! If you forgot your password, you may request a reset.";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'phone_exist':
				$message = "An Account with Phone Number: $data already exists! If you forgot your password, you may request a reset.";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'invalid_password':
				$message = "Invalid Password. Please check and enter again!";
				$description = "Please verify your Username or Password.";
				break;
			case 'inactive_account':
				$message = "Hey $data! your account with Tauris Tech is currently in-active!<br><br>Please tap 'Activate now!' below to activate your account!";
				$description = "Please activate your account using code sent to you.";
				break;
			case 'invalid_activation':
				$message = "Activation Code:<strong> $data </strong>is not valid. Please check that you have entered it correctly or request new Code";
				$description = "Please verify your Activation Code or request new Code.";
				break;
			case 'already_activated':
				$message = "The Account associated with Email Address: $data is already Activated";
				$description = "Please login or Reset your Password if you do not remember it.";
				break;
			case 'invalid_code':
				$message = "Login Code:<strong> $data </strong>is not valid. Please check that you have entered it correctly or request new Code";
				$description = "Please verify your Activation Code or request new Code.";
				break;
			case 'expired_code':
				$message = "Sorry, the Code you entered has expired. The OTP Code is only valid for 5 minutes after you requested it.";
				$description = "Please request a new OTP.";
				break;
			case 'code_used':
				$message = "Sorry, the Code you entered has already been used. Code can only be used once.";
				$description = "Please request a new OTP.";
				break;
			case 'code_cancelled':
				$message = "Sorry, the Code you entered was cancelled because another code was generated.";
				$description = "Please request a new OTP.";
				break;
			case 'password_mismatch':
				$message = "Error: Old Password Incorrect";
				$description = "Please check your or Reset your Password.";
				break;
			case 'password_inuse':
				$message = "Error: You can not update with current Password";
				$description = "Please check your or Reset your Password.";
				break;
			case 'suspension':
				$message = "Hey $data! your account with Tauris Tech is currently On-Hold for administrative issues!<br><br>Please contact Tauris Tech Support!";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'deleted':
				$message = "The account associated with Email Address: $data was previously deleted. Please contact Tauris Tech Support to enable new Signup.";
				$description = "Please contact Tauris Tech Support to enable new Signup.";
				break;
			case 'account_not_found':
				$message = "Ooops! Sorry, we could not find any account matching $data!<br><br>Please check and try again!";
				$description = "Please contact Tauris Tech Support.";
				break;
			case 'invalid_reset':
				$message = "There is no pending Password Reset for account associated with: $data";
				$description = "Please initiate a new Password Reset or contact Tauris Tech Support.";
				break;				
			case 'invalid_reset_code':
				$message = "Invalid Password Reset Code: $data";
				$description = "Please verify your Password Reset Code.";
				break;

			case 'nocall':
				$message = "Error: Unsupported API Call";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'failed_activation':
				$message = "An error occured while attempting to activate your account using Email Address: $data. Please contact support.";
				$description = "Please contact Tauris Tech Support.";
				break;
				
			case 'failed_signup':
				$message = "An error occured while attempting to create your account. Please contact support.";
				$description = "Please contact Tauris Tech Support.";
				break;
				
			case 'clockin_error':
				$message = "An error occured while attempting to complete ".$data.". Please contact support.";
				$description = "Please contact Tauris Tech Support if this is an error.";
				break;
				
			case 'duplicate_application':
				$message = "Error: You have already applied for this job.";
				$description = "Please contact Tauris Tech Support.";
				break;
				
			case 'multiple_clockin_attempt':
				$message = "You are currently clocked-in on another job. You cannot Clock-In while you have another active shift. Please clock-out first.";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'no_customer_exists':
				$message = "This user does not have ID on Stripe payment gateway.";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'customer_exists':
				$message = "This user already has ID on Stripe payment gateway.";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'account_error':
				$message = "An unknown error has occured with your account while communicating with payment gateway.";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'payment_gateway_error':
				$message = "Error communicating with payment gateway.";
				$description = "Please contact Tauris Tech Support.";
				break;

			case 'payment_gateway_missing_parameter':
				$message = "Error communicating with payment gateway - required parameter is missing.";
				$description = "Please contact Tauris Tech Support.";
				break;
			
			case 'endpoint_not_in_use':
				$message = "The API Endpoint you have requested is currently not in use.";
				$description = "Please contact Tauris Tech Support.";
				break;
				
			case 'insert_tracking_data':
				$message = "Error: Failed to create tracking data record";
				$description = "Could not create record due to Query error. Please contact Tauris Tech Support.";
				break;
			case 'update_tracking_data':
				$message = "Error: Failed to update tracking data record";
				$description = "Could not update record due to Query error. Please contact Tauris Tech Support.";
				break;
				
			// case 'unknown_tracking_action':
			// 	$message = "Error: Unknown or undefined value in 'action' field.";
			// 	$description = "Check for acceptable field options. Please contact Tauris Tech Support.";
			// 	break;

			default:
				$message = "Unknown Error";
				$description = "Please contact Tauris Tech Support.";
				break;
		}

		$data = array(
			'status' => 0,
			'message' => $message,
			'description' => $description
		);
		header('Content-Type: application/json');
		echo json_encode($data);
      exit();
	}

	// Handles transaction messages
	function getMessage($code, $id) {
		$message = array(
			'list_success' => 'Success: Records fetched!',
			'detail_success' => 'Success: Record [with ID: '.$id.'] fetched!',
			'create_success' => 'Success: Record [with ID: '.$id.'] created!',
			'update_success' => 'Success: Record [with ID: '.$id.'] updated!',
			'update_all_success' => 'Success: All records updated!',
			'delete_success' => 'Success: Record [with ID: '.$id.'] deleted!',
			'delete_all_success' => 'Success: All records deleted!',
			'list_failed' => 'No records fetched!',
			'detail_failed' => 'No record fetched!',
			'create_failed' => 'No record created!',
			'update_failed' => 'No record updated!',
			'update_all_failed' => 'No records updated!',
			'delete_failed' => 'No record deleted!',
			'delete_all_failed' => 'No records deleted!',
		);
      return $message[$code];
	}
?>