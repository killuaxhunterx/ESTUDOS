<?php 


require_once "qtSalario.php";

$numero = $_POST['numero'];

$salario = new Salario();

$salario->qtSalario($numero);







 ?>