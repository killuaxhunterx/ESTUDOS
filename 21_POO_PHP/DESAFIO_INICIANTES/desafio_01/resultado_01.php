<?php 

$numero = $_POST['numero'];

$sucessor = $numero + 1;
$antecessor = $numero - 1;



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>

 	<h1> O numero escolhido foi <?php print_r($numero)?></h1>
 	<h1> Sucessor: <?php print_r($sucessor)?></h1>
 	<h1> Antecessor: <?php print_r($antecessor)?></h1>

 
 </body>
 </html>