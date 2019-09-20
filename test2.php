

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://demo7609961.mockable.io/dhl/status/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
  ),
));

$response2 = curl_exec($curl);
$err = curl_error($curl);


if ($err) {
  echo "cURL Error #:" . $err;
} else {
$response2 = curl_exec($curl);
$json_convert = strip_tags(html_entity_decode($response2));
$response2 = json_encode($json_convert);


print_r($response2);}

?>