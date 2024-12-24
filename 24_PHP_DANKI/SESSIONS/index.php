<?php 

// session_start();
// $_SESSION['nome'] = "Arthur";
// session_destroy();

$nome = "Arthur";


setcookie('nome', $nome, time() + (60*60), '/');

	echo $_COOKIE['nome'];




 ?>