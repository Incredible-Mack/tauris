<?php
	include('cors.php');
	include('db_config.php');
	include('handlers.php');
	include('notification.php');
	include('public.php');
	// Initial deposit for payment plans
	$initial_deposit = 40;
	$trial_duration = 900; // In seconds
	$trial_course = "3,2,4,5"; // Array of courses
?>