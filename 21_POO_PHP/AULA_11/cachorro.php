<?php 

include_once "lobo.php";

class Cachorro extends lobo{

	public function emitirSom(){
		print("Au Au Au");
	}

	public function reagirFrase($frase){
		if($frase == "Bom garoto" || $frase == "Olá"){
			print("Abanar e latir");
		}else{
			print("Rosnar");
		}
	}
	public function reagirHoras($horas,$min){
		if($horas < 12){
			print("Abanar");

		}elseif($horas > 18){
			print("ignorar");
		}else{
			print("Abanar e latir");
		}
	}
	public function reagirDono($dono){
		if($dono === true){
			print("Abanar");
		}else{
			print("Abanar e latir");
		}
	}
	public function reagirIdade($idade, $peso){
		if($idade == 5 && $peso <10 ){
			print("Abanar");
		}else{
			print("Rosnar");
		}
		}
	
	
	public function reagir(){

		
	}

}





 ?>