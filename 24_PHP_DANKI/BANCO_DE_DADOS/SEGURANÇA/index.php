<?php 

	define('HOST', 'localhost');
	define('DBNAME', 'db_teste');
	define('USER', 'root');
	define('PASS', 'ASD');

	try {
		$pdo= new PDO('mysql:hostname:'.HOST.';dbname='.DBNAME,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		echo 'Não foi possivel conectar ao banco de dados';
	}












 ?>