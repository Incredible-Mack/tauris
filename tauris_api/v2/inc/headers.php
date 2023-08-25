<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json");
	header("Access-Control-Allow-Methods: POST, GET, OPTION");
	header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, App-Id, App-Key, App-Secret, App-Session, Student-Id, Language-Mode, Learning-Mode, Device-Platform, Network-Connection, Ip-Address, Firebase-Id");
    

	$GLOBALS['apiheader'] = getallheaders();
	$GLOBALS['dev_mode'] = true; // Switch for Development or Production Mode
	$GLOBALS['firebase_mode'] = true; // Determines if Application is using User Data from Firebase
	$GLOBALS['quiz_limit'] = 50; // Determines if Application is using User Data from Firebase
?>