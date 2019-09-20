
      <?php

$curl = curl_init();

  curl_setopt_array($curl, array(
  CURLOPT_URL => "https://demo7609961.mockable.io/orders/?customer_email=cat-stevens%40catworld.io",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HEADER => false,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
    ),
 //   CURLOPT_POSTFIELDS => $data
  ) 
  );

$response = curl_exec($curl);
$response = json_encode($response);


print_r($response);


curl_close($curl);

?>