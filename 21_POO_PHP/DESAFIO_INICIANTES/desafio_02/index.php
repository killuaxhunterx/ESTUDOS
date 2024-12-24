<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	 Sorteador de Numeros: <br><br> Numero aleatorio de 0 a 100 <br><br>
	<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="submit" name="submit" id="submit"> Toque aqui para gerar o numero!<br><br>
	</form>
	<?php
	require_once "sorteador.php";

	$range = new Sorteador();

	if (isset($_POST['submit'])) {
		
		echo "<p>Numero sorteado: " . $range->RandNumero() . "</p>";

	}

	?>




</body>
</html>