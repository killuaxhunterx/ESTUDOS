<?php 

abstract class Animal{

	private $peso, $idade, $membros;
	public abstract function locomover();
	public abstract function alimentar();
	public abstract function emitirSom();

	public final function __construct($peso,$idade,$membros){

		$this->set_peso($peso);
		$this->set_idade($idade);
		$this->set_membros($membros);
	}

	public function set_peso($peso){
		$this->peso=$peso;
	}

	public function get_peso(){
		return $this->peso;
	}

	public function set_idade($idade){
		$this->idade=$idade;
	}

	public function get_idade(){
		return $this->idade;
	}
	public function set_membros($membros){
		$this->membros=$membros;
	}

	public function get_membros(){
		return $this->membros;
	}

}





 ?>