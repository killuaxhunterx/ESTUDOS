<?php 

$id = 5;
$pdo = new PDO('mysql:hostname=localhost;dbname=php_danki','root','');

$sql = $pdo->prepare("DELETE FROM php_learning WHERE id=?");

if($sql->execute(array($id))){
	echo "Deletado com sucesso";
}










 ?>