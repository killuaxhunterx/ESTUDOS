<?php 

if($pdo = new PDO('mysql:hostname=localhost;dbname=php_danki','root','')){
	// echo "Banco de dados conectado";
}


// $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=3");

// if($sql->execute()){
// 	$info = $sql->fetchAll();
// }


// echo "<pre>";
// // print_r($info);
// echo "</pre>";

// foreach ($info as $key => $value) {
// 	echo "<b>Titulo:</b> " . $value['titulo'];
// 	echo "<br>";
// 		echo "<br>";

// 	echo "<b>Conteudo:</b> " . $value['conteudo'];
// 	echo "<hr>";

// }


$sql = $pdo->prepare("SELECT * FROM categorias");
$sql->execute();
$info = $sql->fetchAll();

foreach ($info as $key => $value) {
	$categoria_id = $value['id'];
	echo "Categoria: " . "<b>" . strtoupper($value['nome_categoria']) . "</b>";
	echo "<br>";
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = '$categoria_id'");
	$sql->execute();
	$infos = $sql->fetchAll();

		foreach ($infos as $key => $values) {
			echo "<br>";
			echo "Titulo: " . $values['titulo'];
			echo "<br>";
			echo "<br>";
			echo "Conteudo: " . $values['conteudo'];
			echo "<br>";
			echo "<br>";
		}
}



 ?>