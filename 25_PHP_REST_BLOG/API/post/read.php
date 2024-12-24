<?php 

header('Acess-control-Allow-Origin: *');
header('Content-type: aplicattion/json');


include_once('C:\xampp\htdocs\25_PHP_REST_BLOG\CONFIG\Database.php');
include_once('C:\xampp\htdocs\25_PHP_REST_BLOG\MODELS\Post.php');

$dataBase = new Database();
$db = $dataBase->connect();

$post= new Post($db);

$result = $post->read();

$num = $result->rowCount();

if ($num > 0 ) {
	$posts_arr= array();
	$posts_arr['data'] = array();

	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$post_item = array(

			'id' => $id,
			'title' => $title,
			'body' => html_entity_decode($body),
			'author'  =>$author,
			'category_id' => $category_id,
			'category_name' => $category_name
		);

		array_push($posts_arr['data'], $post_item);
	}

	echo json_encode($posts_arr);
}else{

	echo json_encode(array('Message'=>'No posts found'));

}



 ?>