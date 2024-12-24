<?php 

$update = json_encode([

	'title'=>'Updated title'

	]);



$headers = [
		"header"=>"Content-type: application/json; charset=UTF-8",
		"Accept-language = PT-BR"
];



$ch = curl_init();

/*curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
*/

curl_setopt_array($ch, [

	CURLOPT_URL => 'https://jsonplaceholder.typicode.com/todos/1',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "PATCH",
	CURLOPT_POSTFIELDS => $update,
	CURLOPT_HTTPHEADER => $headers

	]);

$data = curl_exec($ch);
curl_close($ch);
var_dump($data);



 ?>