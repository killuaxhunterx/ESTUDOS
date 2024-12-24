<?php 
include_once "aluno.php";

class Bolsista extends Aluno{

	private $bolsa;

	public function renovarBolsa($bolsa){
		$this->set_bolsa($bolsa);

	}

	public function pagarMensalidade(){
		print("Mensalidade paga com o desconto da bolsa<br>");
	}

	public function set_bolsa($bolsa){
		$this->bolsa=$bolsa;
	}
	public function get_bolsa(){
		$this->bolsa;
	}

}







 ?>