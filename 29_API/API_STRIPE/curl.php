<?php 

require __DIR__ . "../../vendor/autoload.php";

$api_key = 'SUA_KEY';
$data = [
	'name' => 'Arthur',
	'email' => 'example@gmail.com'
];

$ch = curl_init();

curl_setopt_array($ch, [
	CURLOPT_URL =>'https://Api.stripe.com/v1/customers',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POSTFIELDS =>http_build_query($data),
	CURLOPT_USERPWD => $api_key
	]);

$data = curl_exec($ch);

curl_close($ch);
var_dump($data);




 ?>
