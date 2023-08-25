<?php

	$postData =  array(
		'email' => 'tosinorogun@gmail.comx',
		'password' => 'password'
	);

   function makeApiCall($method, $url, $data) {
      // global $apiUrl;
      // $url = $apiUrl.$endpoint;
      
      $curl = curl_init();
      switch ($method){
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
            break;
         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }

      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         'App-Key: C8762BA5675574D3F0D6344DBAE33A66',
         'App-Secret: 4CB4768206F76B95FC2B1AE6A194F42D',
         'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      
      $result = curl_exec($curl);
      if(!$result){die("Connection Failure");}
      curl_close($curl);
      return $result;
   }

   $myplays = json_decode(makeApiCall('POST', 'http://localhost:8888/api/v2/auth/login/', json_encode($postData)));
   var_dump($myplays);

?>