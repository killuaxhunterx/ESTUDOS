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
			require_once "livro.php";
			require_once "pessoa.php";

			$leitor1 = new Pessoa("Matheus", 40, "Furry");
			$dracula = new Livro("Dracula", "Bram Stoker", 648, 144, "Sim", $leitor1);

			//print_r($dracula);

			$dracula->avançarPag();
			$dracula->voltarPag();
			$dracula->detalhes($leitor1);
			$leitor1->fazerAniver();
			//print_r($leitor1);


		 ?>

	</pre>

</body>
</html>