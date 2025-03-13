<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/xml");

$url = "https://carspark.dealerk.it/myPortalXML/index?myPortalXMLkey=8ae56831-8940-4360-ad00-fe79b046ca00";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
