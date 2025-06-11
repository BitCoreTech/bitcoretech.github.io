<?php
$apiKey = $_GET['api-key'];
$account = $_GET['account'];

$jsonData = file_get_contents("C:/inetpub/userdata/accounts.json");
$webpage = file_get_contents(filename: "C:/inetpub/wwwroot/APIs/Search/site.html");
$data = json_decode($jsonData, true);


print_r($data);


?>