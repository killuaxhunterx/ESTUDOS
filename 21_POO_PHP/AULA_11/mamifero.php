<?php 

require_once "animal.php";

class Mamifero extends Animal{

	private $corPelo;

	public function locomover(){
		print("Correndo");
	}
	public function alimentar(){
		print("Mamando");
	}
	public function emitirSom(){
		print("Som de mamífero");
	}

	public function set_corPelo($corPelo){
		$this->corPelo=$corPelo;
	}
	public function get_corPelo(){
		return $this->corPelo;
	}
}

 ?>