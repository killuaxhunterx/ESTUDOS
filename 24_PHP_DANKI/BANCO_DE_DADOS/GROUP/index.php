<?php 

$pdo = new PDO('mysql:hostname=localhost;dbname=db_teste', 'root', '');

$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY nome ORDER BY cargo ASC");

$sql->execute();

$info = $sql->fetchAll();

foreach ($info as $key => $value) {
	echo "<pre>";
	echo $value['nome'];
	echo "<br>";
	echo "</pre>";


}





 ?>