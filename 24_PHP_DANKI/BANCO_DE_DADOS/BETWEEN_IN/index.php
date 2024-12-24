<?php 


define('HOST', 'localhost');
define('DBNAME', 'db_teste');
define('USER','root');
define('PASS', '');

$pdo = new PDO('mysql:hostname='.HOST.';dbname='.DBNAME,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$sql = $pdo->prepare("SELECT * FROM clientes WHERE id BETWEEN 1 AND 4");

$sql->execute();

$info = $sql->fetchAll();

print_r($info);

// foreach ($info as $key => $value) {
// 	echo	$value['id'];

// }









 ?>