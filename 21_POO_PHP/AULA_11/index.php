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

			require_once "mamifero.php";
			require_once "reptil.php";
			require_once "peixe.php";
			require_once "ave.php";
			require_once "canguru.php";
			require_once "cobra.php";
			require_once "cachorro.php";
			require_once "tartaruga.php";
			require_once "arara.php";



			$mamifero = new Mamifero(13.4,12,4);
			$peixe = new Peixe(25,2,3);
			$ave = new Ave(19,9,2);
			$canguru = new Canguru(80,34,4);
			$cobra = new Cobra(80,34,4);
			$tartaruga = new Tartaruga(80,34,4);
			$arara = new Arara(80,34,4);
			$cachorro = new Cachorro(80,34,4);
			$mamifero->set_corPelo("Preto");
			print_r($mamifero);
			$reptil = new Reptil(50,7,0);
			$reptil->set_corEscama("Verde");
			print_r($reptil);
			print_r($ave);
			print_r($peixe);
			print_r($canguru);
			print_r($cobra);
			print_r($tartaruga);
			print_r($arara);
			$cachorro->reagirDono(true);


		 ?>


	</pre>

	

</body>
</html>