<?php 

require __DIR__ . "../../vendor/autoload.php";

$title = json_encode([
	'title'=>'updated title'
	]);

$headers = [

	'Content-type' => 'application/json;charset=UTF-8'
];

$client = new GuzzleHttp\Client(); 

$response = $client->patch('https://jsonplaceholder.typicode.com/albums/1', ['headers'=>$headers, 'body'=>$title]);

var_dump((string) $response->getBody());



 ?>