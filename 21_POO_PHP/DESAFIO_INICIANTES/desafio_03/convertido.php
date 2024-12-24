<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
	require_once "conversor.php";	

	$conversor = new Conversor();

	$numero = $_POST['numero'];
	$valor_convertido = $conversor->converterDolar($numero);
	$valor_convertido_formatado = number_format((float)$valor_convertido, 2);

 	?>

	<h1>Valor convertido é: $<?php echo $valor_convertido_formatado; ?></h1>

</body>
</html>



