<?php 

include_once "pessoa.php";

class Aluno extends Pessoa{

	private $matricula, $curso, $numeroMatricula;

	public function fazerMatricula(){

	if (!$this->get_matricula()) {

		for($i = 1; $i <=1; $i++){

			$array_matricula = [];

			$range_matricula = range(1, 8);

			shuffle($range_matricula);

			$array_matricula = implode($range_matricula);

			$this->set_numeroMatricula($array_matricula);

			$this->set_matricula(true);

			print("Matricula Aberta! Seu número de matricula é: " . $this->get_numeroMatricula() . ".<br>");

		}
			}
	}

	public function pagarMensalidade(){
		print("Mensalidade paga<br>");
	}

	public function cancelarMatricula(){
		if(!$this->get_matricula()){
			print("Antes de cancelar, primeiro faça sua matricula.<br>");
		}elseif($this->get_matricula()){
			$this->set_matricula(false);

			print("Matricula cancelada.<br>");
		}

	}

	public function set_matricula($matricula){
		if($matricula === false){
			$this->matricula=false;
		}
		else{
			$this->matricula=true;
		}
	}

	public function get_matricula(){
		return $this->matricula;
		
	}

	public function set_curso($curso){
		$this->curso=$curso;
	}

	public function get_curso(){
		return $this->curso;
	}

	public function set_numeroMatricula($numeroMatricula){
		$this->numeroMatricula=$numeroMatricula;
	}

	public function get_numeroMatricula(){
		return $this->numeroMatricula;
	}



}








 ?>