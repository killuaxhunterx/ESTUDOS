<?php 

include_once "pessoa.php";

class Professor extends Pessoa{

	private $salario, $especialidade;

	public function receberAumento($aumento){
		$this->set_salario($this->get_salario() + $aumento);

	}

	public function set_salario($salario){
		$this->salario=$salario;
	}

	public function get_salario(){
		return $this->salario;
	}

	public function set_especialidade($especialidade){
		$this->especialidade=$especialidade;
	}

	public function get_especialidade(){
		return $this->especialidade;
	}



}






 ?>