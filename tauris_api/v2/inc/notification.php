<?php
	// Handles Notification message
	function getNotificationMessage($message_data) {
		switch($message_data["action"]) {
			case 'account-activation':
				$status = 1;
				$email_subject = "Tauris Tech - Activation Code";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].".<p>Thank you for creating an account on the Tauris App.</p><p>Your activation Code is: ".$message_data["code"]."</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your activation Code is: ".$message_data["code"];
				break;

			case 'resend-activation':
				$status = 1;
				$email_subject = "Tauris Tech - Activation Code";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].".<p>Your activation Code is: ".$message_data["code"]."</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your activation Code is: ".$message_data["code"];
				break;
				
			case 'forgot-password':
				$status = 1;
				$email_subject = "Tauris Tech - Reset Lost Password";
				$email_message = "Forgot Password. Your reset Code is: ".$message_data["code"];
				$sms_message = "Forgot Password. Your reset Code is: ".$message_data["code"];
				break;
				
			case 'password-reset-complete':
				$status = 1;
				$email_subject = "Tauris Tech - Password Reset Complete";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Your password reset is complete.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your password reset is complete.";
				break;
				
			case 'password-update-complete':
				$status = 1;
				$email_subject = "Tauris Tech - Password Update Complete";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Your password update is complete.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your password update is complete.";
				break;

			case 'account-activated':
				$status = 1;
				$email_subject = "Tauris Tech - Account Activation Complete";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Your Tauris App account is activated.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your Tauris App account is activated.";
				break;

			case 'trial-access':
				$status = 1;
				$email_subject = "Tauris Tech - Free Trial Access";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Thank you for completing your signup, you have been granted free Trial Access to one or more of our course.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Thank you for completing your signup, you have been granted free Trial Access to one or more of our course.";
				break;
	
			case 'account-closed':
				$status = 1;
				$email_subject = "Tauris Tech - Account Closure Complete";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Your account closure is complete.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Your account closure is complete.";
				break;
	
			case 'new-rsvp':
				$status = 1;
				$email_subject = "Tauris Tech - RSVP Received";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>We have received your RSVP.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". We have received your RSVP.";
				break;
	
			case 'cancel-rsvp':
				$status = 1;
				$email_subject = "Tauris Tech - RSVP Cancelled";
				$email_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". <p>Request to cancel your RSVP has been completed.</p>";
				$sms_message = "Hi ".$message_data["firstname"]." ".$message_data["lastname"].". Request to cancel your RSVP has been completed.";
				break;
	
			default:
				$status = 0;
				$email_subject = null;
				$email_message = null;
				$sms_message = null;
				break;
		}

		$data = array(
			'status' => $status,
			'email_subject' => $email_subject,
			'email_message' => $email_message,
			'sms_message' => $sms_message
		);
		header('Content-Type: application/json');
		return json_encode($data);
	}
?>
