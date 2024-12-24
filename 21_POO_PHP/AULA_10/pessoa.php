<?php 

include_once "interface_pessoa.php";

abstract class Pessoa implements iPessoa{

	private $nome, $idade, $sexo;


	public function __construct($nome, $idade, $sexo){

		$this->set_nome($nome);
		$this->set_idade($idade);
		$this->set_sexo($sexo);


	}

	public final function fazerAniversario(){

		$this->set_idade($this->get_idade() + 1);

	}

	public function set_nome($nome){

		$this->nome=$nome;
	}

	public function get_nome(){

		return $this->nome;
	}

	public function set_idade($idade){

		$this->idade=$idade;
	}

	public function get_idade(){

		return $this->idade;
	}

	public function set_sexo($sexo){

		$this->sexo=$sexo;
	}

	public function get_sexo(){

		return $this->sexo;
	}




}









 ?>