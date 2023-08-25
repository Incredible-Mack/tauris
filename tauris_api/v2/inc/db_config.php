<?php
    // Check for current server environment
    $environment = $_SERVER['SERVER_NAME'];
        if ($environment == "localhost" || $environment == "127.0.0.1") {
            $GLOBALS['dev_mode'] = true;
        }else{
            $GLOBALS['dev_mode'] = false;
        }

    if($GLOBALS['dev_mode']) {
        $host  = 'localhost';
        $user  = 'root';
        $password   = "";
        $database  = "tauris_app";
        $GLOBALS['baseUrl'] = "http://localhost/tauris_api/v2/"; // Development
        $GLOBALS['storageUrl'] = "http://localhost/tauris_api/v2/storage/"; // Development
        $GLOBALS['storageUrlAwsS3'] = "https://tauris-app-image-repo.s3.us-east-2.amazonaws.com/"; // Production AWS S3
        $GLOBALS['stripeKey'] = "sk_test_51IFll6EEPyEsTkBVNhHbYpkIWNPUMUojCHgMeU8m2By5mPCMTds8LBqeZa8SaIaw3U1Y9oeLZ80XymW2E5hqB29R00zWKcKutJ"; // Development
        $GLOBALS['AccountSid'] = "AC7f6d1fb6f2e246f11ed6ae10fd6d0acf";
        $GLOBALS['AuthToken'] = "290a684802c8acb9eaaacb533ae98e52";
        $GLOBALS['AuthPhoneNo'] = "+16463629535";
    }else{
        $host  = '208.109.215.49';
        $user  = 'admintauris_console';
        $password   = "xHA4=5gj^JRf";
        $database  = "admintauris_console";
        $GLOBALS['baseUrl'] = "https://api.tauris.app/v2/"; // Production
        $GLOBALS['storageUrl'] = "https://admin.tauris.app/_lib/file/"; // Production
        $GLOBALS['storageUrlAwsS3'] = "https://tauris-app-image-repo.s3.us-east-2.amazonaws.com/"; // Production AWS S3
        $GLOBALS['stripeKey'] = "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"; // Development
        $GLOBALS['AccountSid'] = "AC7f6d1fb6f2e246f11ed6ae10fd6d0acf";
        $GLOBALS['AuthToken'] = "290a684802c8acb9eaaacb533ae98e52";
        $GLOBALS['AuthPhoneNo'] = "+16463629535";
    }
    
    $conn = new mysqli($host, $user, $password, $database);
    if($conn->connect_error){
        die("Error failed to connect to MySQL: " . $conn->connect_error);
    }else{
        $dbConnect = $conn;
        $GLOBAL["dbConnect"] = $dbConnect;
    }
    
?>