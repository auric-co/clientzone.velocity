<?php
include_once dirname(__FILE__)."/../../../System/System.php";
$sys = new System();
$curl = curl_init();
$activity = $sys->escape_data($_GET['activity']);
$request = json_encode(array('token' => $sys->getUserToken()));
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.velocityhealth.co.za/api/client/activities/data/bar/".$activity,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"$request",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);
print_r(json_encode($data['chart']));
