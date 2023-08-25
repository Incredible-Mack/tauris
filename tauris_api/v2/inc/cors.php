<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
	header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, App-Id, App-Key, App-Secret, App-Session, Student-Id, Language-Mode, Learning-Mode, Device-Platform, Network-Connection, Ip-Address, Firebase-Id");
	// header('Access-Control-Allow-Headers: Content-Type, App-Key, App-Secret');
    
	$GLOBALS['apiheader'] = getallheaders();
	$GLOBALS['dev_mode'] = true; // Switch for Development or Production Mode
?>

