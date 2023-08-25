<?php
$id =  $_GET['contract_id'];
$url = $domain."/tauris_api/v2/api/contract_details.php?contract_id=$id";

//$url = $domain."tauris_api/v2/api/contracts.php?page=2";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
)
);
$response = curl_exec($curl);

curl_close($curl);
 $response = json_decode($response, true);

function convert_date($date){
    $dateString = $date;
    $timestamp = strtotime($dateString);
    $formattedDate = date('jS F, Y', $timestamp);
return $formattedDate; 

}

?>
