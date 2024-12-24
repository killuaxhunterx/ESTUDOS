<?php 

$host = 'localhost';
$dbname = 'pdo';
$user = "root";
$pass = '';

///DSN = DATA SCORCE NAME

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$pdo = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

/*$stmt = $pdo->query('SELECT * FROM posts');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row['title'] . "<br>";
}

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
	echo $row->title . "<br>";
}
*/

# PREPARED STATAMENT
// POSITICIONAL PARAMETERS
$author = 'Thiago';
$is_published = true;

// $sql = 'SELECT * FROM posts WHERE author = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

// NAMED PARAMETERS

// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();

// foreach ($posts as $key => $value) {
// 	echo $value->author . "<br>";
// 		if ($value->is_published == true) {
// 			echo 'true';
// 		}
// }

# FETCH SINGLE POST
// $id = 3;
// $sql = 'SELECT * FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id'=>$id]);
// $posts = $stmt->fetch();

// echo $posts->author;

# ROW COUNT

// $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();

// echo $postCount;

# INSERT DATA

// $data = 
// 	[
// 	'author'=>'Posts',
// 	'title'=>'posts',
// 	'body'=>'Lorem ipsum2',
// 	];

// $sql = "INSERT INTO posts(author,title,body) VALUES(:author,:title,:body)";

// $stmt = $pdo->prepare($sql);

// $stmt->execute(
// 				[
// 					':author'=>$data['author'],
// 					':title'=>$data['title'],
// 					':body'=>$data['body'],
// 				]
// 			);
 
# UPDATE DATA

// $id = 4;
// $data = 
// 	[
// 	'author'=>'David',
// 	'title'=>'Titulo-David',
// 	'body'=>'Updated body',
// 	'id'=>4
// 	];

// $sql = "UPDATE posts SET body = :body WHERE id = :id";

// $stmt = $pdo->prepare($sql);
// $stmt->execute([':body'=>$data['body'], 'id'=>$id]);


# DELETE DATA

// $id = 4;
// $data = 
// 	[
// 	'author'=>'David',
// 	'title'=>'Titulo-David',
// 	'body'=>'Updated body',
// 	'id'=>4
// 	];

// $sql = "DELETE FROM posts WHERE id = :id";

// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id'=>$id]);

# SEARCH DATA

$id = 4;
$search = '%i%';
$data = 
	[
	'author'=>'David',
	'title'=>'Titulo-David',
	'body'=>'Updated body',
	'id'=>4
	];

$sql = "SELECT * FROM posts WHERE title LIKE ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach ($posts as $key => $value) {
	echo "Title: " . $value->title . "<br>";
}



 ?>



