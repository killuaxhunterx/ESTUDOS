<?php

$title = json_encode([

		"title" => "Updated Title"	
	]);

$options = [

	'http'=>[

		"method" => "PATCH",
		"header" => "Content-type: application/json; charset=UTF-8",
		"content" => $title

	]
];

$context = stream_context_create($options);

$data = file_get_contents('https://jsonplaceholder.typicode.com/todos/1', false, $context);
var_dump($data);
print_r($http_response_header);


 ?>