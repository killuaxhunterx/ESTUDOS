<?php 

require_once "animal.php";

class Ave extends Animal{

	private $corPena;

	public function locomover(){
		print("Voando");
	}
	public function alimentar(){
		print("Comendo frutas");
	}
	public function emitirSom(){
		print("Som de ava");
	}

	public function set_corPena($corPena){
		$this->corPena=$corPena;
	}
	public function get_corPena(){
		return $this->corPena;
	}
	public function fazerNinho(){
		print("Fazendo ninho");
	}
}

 ?>