<?php  

include_once "interfaceLuta.php";
include_once "classeLutador.php";

class Luta implements iLuta{

	private $desafiado, $desafiante, $rounds, $aprovada;



	public function marcarLuta($lutador1, $lutador2){

		if ($lutador1->get_categoria() == $lutador2->get_categoria() and $lutador1 != $lutador2) {

			$this->set_aprovada(true);
			$this->set_desafiado($lutador1);
			$this->set_desafiante($lutador2);

		}
		else{

			$this->set_aprovada(false);
			$this->set_desafiado(null);
			$this->set_desafiante(null);
		}

	}

	public function lutar(){
		if ($this->get_aprovada()) {

			$this->get_desafiado()->apresentar();
			$this->get_desafiante()->apresentar();
			$escolha = rand(0,2);

				if ($escolha == 0) {

					$this->get_desafiado()->empatarLuta();
					$this->get_desafiante()->empatarLuta();
					echo "Empatou!";

				}

				elseif($escolha == 1){
					
					$this->get_desafiado()->ganharLuta();
					$this->get_desafiante()->perderLuta();
					print($this->get_desafiado()->get_nome() . " Ganhou!<br>");

				}

				elseif($escolha == 2){
					
					$this->get_desafiado()->perderLuta();
					$this->get_desafiante()->ganharLuta();
					print($this->get_desafiante()->get_nome() . " Ganhou!<br>");


				}

		} else{

			echo "Luta nao pode acontecer<br>";
		}

	}

	public function set_desafiado($desafiado){

		$this->desafiado=$desafiado;
	}

	public function get_desafiado(){

		return $this->desafiado;
	}


	public function set_desafiante($desafiante){

		$this->desafiante=$desafiante;
	}

	public function get_desafiante(){

		return $this->desafiante;
	}

	public function set_rounds($round){

		$this->rounds=$round;
	}

	public function get_rounds(){

		return $this->rounds;
	}

	public function set_aprovada($aprovada){

		$this->aprovada=$aprovada;
	}

	public function get_aprovada(){

		return $this->aprovada;
	}

}


 ?>