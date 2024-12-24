<?php 

require_once '../MAIN/signup.php';
require_once '../INCLUDES/db.inc.php';
require_once '../INCLUDES/functions.inc.php';
$db = new Database();
$database = $db->connect();


if(isset($_POST['Submit'])){

	$nome = $_POST['Nome'];
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$pwdrepeat = $_POST['pwdrepeat'];
	// var_dump($nome,$usuario,$email,$senha,$pwdrepeat);
	// echo "<br><br>";

	if (emptyInputSignup($nome,$usuario,$email,$senha,$pwdrepeat) !== false) {
		header('Location: ../MAIN/signup.php?error=empyinput');
		exit();
	}

	if (invalidUid($usuario) !== false) {
		header('Location: ../MAIN/signup.php?error=invalidUser');
		exit();
	}

	if (invalidEmail($email) !== false) {
		header('Location: ../MAIN/signup.php?error=Invalidemail');
		exit();
	}

	if (pwdMatch($senha,$pwdrepeat) !== false) {
		header('Location: ../MAIN/signup.php?error=pwddontmatch');
		exit();
	}

	if (uidExists($conn,$usuario,$email) !== false) {
		header('Location: ../MAIN/signup.php?error=usernametaken');
		exit();
	}
	if (emailExists($conn,$email) !== false) {
		header('Location: ../MAIN/signup.php?error=emailtaken');
		exit();
	}
	if (nameExists($conn,$nome) !== false) {
		header('Location: ../MAIN/signup.php?error=nametaken');
		exit();
	}

	createUser($conn,$nome,$email,$senha,$usuario);

	

}else{
	header('Location: ../MAIN/signup.php');
	echo "erro1";
	exit();
}



 ?>