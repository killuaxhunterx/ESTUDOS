<?php 

if (isset($_POST['Submit'])) {
	$usuario = $_POST['uid'];
	$senha = $_POST['senha'];

	require_once 'read.inc.php';
	require_once 'Post.inc.php';
	require_once 'db.inc.php';
	require_once 'functions.inc.php';

	$db = new Database();
	$conn = $db->connect();

	if (emptyInputLogin($usuario,$senha) !== false) {
		header('Location: ../MAIN/index.php?error=empyinput');
		exit();
	}

	loginUser($conn,$usuario,$senha);

} else{
	header('Location: ../MAIN/index.php');
	exit();
}








 ?>