<?php 

define('HOST', 'localhost');
define('DBNAME', 'db_teste');
define('USER', 'root');
define('PASS', '');

	try {

		$pdo = new PDO('mysql:hostname='.HOST.';dbname='.DBNAME,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		echo 'Não foi possivel conectar com o banco de dados';
	}


	try {
		$sql = $pdo->prepare("SELECT * FROM clientes");
		$sql->execute();
		$info = $sql->fetchAll();
		
	} catch (Exception $e) {
		'Não foi possivel selecionar itens do banco de dados';
	}

	try {
		foreach ($info as $key => $value) {
			echo $value['nome'];
			echo "<br>";
		}
		
	} catch (Exception $e) {
		echo "Nao foi possivel imprimir os nomes";
	}
	




 ?>