<?php 

require_once "animal.php";

class Reptil extends Animal{

	private $corEscama;

	public function locomover(){
		print("Rastejando");
	}
	public function alimentar(){
		print("Comendo vegetais/animais");
	}
	public function emitirSom(){
		print("Som de reptil");
	}

	public function set_corEscama($corEscama){
		$this->corEscama=$corEscama;
	}
	public function get_corEscama(){
		return $this->corEscama;
	}
}

 ?>