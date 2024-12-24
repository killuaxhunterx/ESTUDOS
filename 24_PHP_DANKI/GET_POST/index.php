
<?php 
	// $nome = @$_GET['nome'];
	// $email = @$_GET['email'];
	// // $Submit = @$_GET['Submit'];

	// echo $nome;
	// echo "<br>";
	// echo $email;
	// echo "<br>";
	// // echo $email;
	// // echo "<br>"

	if ($_POST['Enviar']) {
		foreach ($_POST['value'] as $key => $x) {
		echo $x;
		echo "<br>";
		// var_dump($x);
	}
	}

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<!-- <form>
		<input type="text" name="nome" id='nome'>
		<input type="email" name="email" id='email'>
		<input type="submit" name="Submit" id="Submit">

	</form> -->

	<form method="POST">

	<input type="checkbox" name="value[]" value="10">10
	<input type="checkbox" name="value[]" value="20">20
	<input type="checkbox" name="value[]" value="30">30
	<input type="checkbox" name="value[]" value="40">40
	<input type="checkbox" name="value[]" value="50">50
	<input type="submit" name="Enviar" id="Enviar">

	</form>


</body>
</html>