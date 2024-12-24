<?php 
require_once '../INCLUDES/read.inc.php';
require_once '../INCLUDES/Post.inc.php';
require_once '../INCLUDES/db.inc.php';
$db = new Database();
$conn = $db->connect();

function emptyInputSignup($nome,$usuario,$email,$senha,$pwdrepeat){
	$result;
	if (empty($nome) || empty($email) || empty($usuario) || empty($senha) || empty($pwdrepeat)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}

function invalidUid($usuario){
	$result;
	if (!preg_match("/^[a-zA-Z0-9\s]*$/", $usuario)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}

function invalidEmail($email){
	$result;
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = false;
	} else{
		$result = true;
	}
	return $result;
}

function pwdMatch($senha,$pwdrepeat){
	$result;
	if ($senha !==$pwdrepeat) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}


function uidExists($conn,$usuario,$email){
	
	$read = new Read($conn);

	$result = $read->read_usuario($usuario,$email);
	if (!$result) {
		header('Location: ../MAIN/signup.php?error=stmtfailed');
		exit();
	}

		if($row = $result->fetch(PDO::FETCH_ASSOC)){
			return $row;
		}else{
			$result = false;
			return $result;
		}
}
function nameExists($conn,$nome){
	
	$read = new Read($conn);

	$result = $read->read_nome($nome);
	if (!$result) {
		header('Location: ../MAIN/signup.php?error=stmtfailed');
		exit();
	}

		if($row = $result->fetch(PDO::FETCH_ASSOC)){
			return $row;
		}else{
			$result = false;
			return $result;
		}
}function emailExists($conn,$email){
	
	$read = new Read($conn);

	$result = $read->read_email($email);
	if (!$result) {
		header('Location: ../MAIN/signup.php?error=stmtfailed');
		exit();
	}
		if($row = $result->fetch(PDO::FETCH_ASSOC)){
			return $row;
		}else{
			$result = false;
			return $result;
		}
}
function createUser($conn,$nome,$email,$senha,$usuario){
	
	$write = new Post($conn);
	$hashdPwd = password_hash($senha, PASSWORD_DEFAULT);

	try {
		$write->write($nome,$email,$hashdPwd,$usuario);
	} catch (Exception $e) {
		header('Location: ../MAIN/signup.php?error=stmtfailed');
		exit();
	}
}

function emptyInputLogin($usuario,$senha){
	$result;
	if (empty($usuario) || empty($senha)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}

function loginUser($conn,$usuario,$senha){
	$uidExists = uidExists($conn,$usuario,$usuario);

	if ($uidExists === false) {
		header('Location: ../MAIN/index.php?error=wronglogin');
		exit();
	}

	$pwdHashed = $uidExists['usersPwd'];
	$checkPwd = password_verify($senha, $pwdHashed);

		if ($checkPwd === false) {
			header('Location: ../MAIN/index.php?error=wronglogin');
			exit();
		}elseif($checkPwd === true){
			session_start();
			sesssion
			$_SESSION['userId'] = $uidExists['id'];
			$_SESSION['useruid'] = $uidExists['usersUid'];
			header('Location: ../MAIN/teste.php');
			exit();
		}
}


 ?>