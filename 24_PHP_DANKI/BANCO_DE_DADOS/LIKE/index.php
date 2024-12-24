<?php 

define('HOST', 'localhost');
define('DBNAME', 'db_teste');
define('USER', 'root');
define('PASS', '');


	$pdo = new PDO('mysql:hostname='.HOST.';dbname='.DBNAME,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


	$sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%ao'");

	$sql->execute();

	$info = $sql->fetchAll();


	foreach ($info as $key => $value) {
		echo $value['nome'];
		echo "<br>";
	}







 ?>