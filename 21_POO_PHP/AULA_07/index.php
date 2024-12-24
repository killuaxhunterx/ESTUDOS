<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<pre>
		
		<?php 

		require_once "classeLutador.php";
		require_once "classeLuta.php";


		$pretty_boy = new classeLutador("Arthur", "Brasileiro", 21, 1.74, 75, 5, 3, 2);
		$ugly_boy = new classeLutador("Pierre", "France", 32, 1.75, 89, 3, 1, 6);


		$luta = new Luta();
		$luta->marcarLuta($pretty_boy, $ugly_boy);
		$luta->lutar();

		print_r($luta);

		?>

	</pre>

</body>
</html>