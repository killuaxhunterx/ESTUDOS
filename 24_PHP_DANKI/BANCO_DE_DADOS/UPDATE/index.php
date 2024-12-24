<?php 


$pdo = new PDO('mysql:host=localhost;dbname=php_danki','root','');
$nome = 'Arthur';
$sobrenome = 'Henrique';
$id = 4;
$sql = $pdo->prepare("UPDATE php_learning SET nome=?,sobrenome=? WHERE id=?");

if($sql->execute(array($nome, $sobrenome,$id))){
	echo "Cliente atualizado com sucesso";
}

 ?>