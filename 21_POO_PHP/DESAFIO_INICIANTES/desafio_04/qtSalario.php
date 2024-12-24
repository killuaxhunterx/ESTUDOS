<?php 

class Salario{

public function qtSalario($x){

	$x_min = $x / 1380;
	$restante = $x % 1380;

	$salario_formatado = number_format((int)$x_min, 0);

	echo "São $salario_formatado salarios minimos e sobra $ $restante";

}
	
}




 ?>