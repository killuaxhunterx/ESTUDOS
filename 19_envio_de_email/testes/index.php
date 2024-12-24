<?php 

session_start();

// var_dump($_POST['submit']);

if (isset($_POST['submit'])) {
	var_dump($_POST['submit']);

	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
	$password = $_POST['password'];
	$_SESSION['username'] = $username;

	if ($username == 'Arthur' && $password=='password') {
		header('Location: /19_envio_de_email/redirect/dashboard.php');
	}else{
		echo "Usuario ou senha incorretos<br>";
	}
}


 ?>

 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<label for='username'>Nome:</label>
	<input type="text" name="username">
	<br>
	<br>
	<label for='password'>Senha:</label>
	<input type="password" name="password">
	<br>
	<br>
	<input type="submit" name="submit" value="submit">
</form>