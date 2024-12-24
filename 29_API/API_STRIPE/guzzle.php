<?php 

require __DIR__ . "../../vendor/autoload.php";


$api_key = 'SUA_KEY';

$data = [
	'name' => 'Guzzle',
	'email' => 'example@gmail.com',
	'description' =>'made with guzzle'
];

$headers=[

	'Content-type: application/json;charset=UTF-8'
];

$stripe = new GuzzleHttp\Client();

$costumer = $stripe->post('https://Api.stripe.com/v1/customers', 
		['headers'=> 

		[
			'Authorization' => 'Bearer ' . $api_key,
		 	'Content-Type' => 'application/x-www-form-urlencoded'
		 ],

		'form_params' => $data
	]);


 ?>