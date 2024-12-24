<?php 

require __DIR__ . "../../vendor/autoload.php";

$data = [
	'name' => 'Thiago',
	'email' => 'example2@gmail.com',
	'description' => 'teste'

];

$api_key = 'SUA_KEY';

$stripe = new \Stripe\StripeClient($api_key);

$costumer = $stripe->customers->all(['limit' => 2]);

foreach ($costumer as $key => $value) {
	echo 'Nome: ' . ($value->name) . "<br>";
	echo 'Email: ' . ($value->email) . "<br>";

}

 ?>