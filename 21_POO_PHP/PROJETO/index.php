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

			require_once "gafanhoto.php";
			require_once "visualizacao.php";


			$gafanhoto = new Gafanhoto("Arthur", 21, "masculino");
			$gafanhoto->play();
			$gafanhoto->pause();
			$gafanhoto->like();
			$gafanhoto->set_titulo("Aula de OOP");
			$gafanhoto->assistirMaisUm();
			$gafanhoto->get_ganharXp();
			$gafanhoto->set_views(5);
			$Visualizacao = new Visualizacao("The GodFather");
			$Visualizacao->set_views(55);
			$Visualizacao->set_avaliacao(85);
			$Visualizacao->avaliarMedia();
			print_r($Visualizacao);

		 ?>

	</pre>

</body>
</html>