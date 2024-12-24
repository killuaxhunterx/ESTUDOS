<?php 

include_once "pessoa.php";
class Funcionario extends Pessoa{

	private $setor, $trabalhando;


	public function mudarTrabalho($setor){
		if(!$this->get_trabalhando()){
			$this->set_setor($setor);
		}
		else{
			print($this->get_nome() . " está trabalhando<br>");
		}

	}

	public function set_trabalhando($trabalhando){
		$this->trabalhando=$trabalhando;
	}
	public function get_trabalhando(){
		return $this->trabalhando;
	}
	public function set_setor($setor){
		$this->setor=$setor;
	}
	public function get_setor(){
		$this->setor;
	}

}







 ?>