<?php 

require_once "animal.php";

class Peixe extends Animal{

	private $corEscama;

	public function locomover(){
		print("Nadando");
	}
	public function alimentar(){
		print("Comendo substancias");
	}
	public function emitirSom(){
		print("Peixe não faz som");
	}

	public function set_corEscama($corEscama){
		$this->corEscama=$corEscama;
	}
	public function get_corEscama(){
		return $this->corEscama;
	}
	public function soltarBolha(){
		print("Soltou um bolha<br>");
	}
}

 ?>