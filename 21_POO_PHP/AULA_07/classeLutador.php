<?php


include_once "lutador.php";

class classeLutador implements Lutador{


		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;


		public function __construct($name, $nacionalidade, $idade, $altura, $peso,$vitorias, $derrotas, $empates){

			$this->set_nome($name);
			$this->get_nome();
			$this->set_nacionalidade($nacionalidade);
			$this->get_nacionalidade();
			$this->set_idade($idade);
			$this->get_idade();
			$this->set_altura($altura);
			$this->get_altura();
			$this->set_peso($peso);
			$this->get_peso();
			$this->set_categoria($peso);
			$this->set_vitorias($vitorias);
			$this->set_derrotas($derrotas);
			$this->set_empates($empates);



		}
		public function apresentar(){

			print("<br>Lutador: " . $this->get_nome() . "<br>");
			print("Origem: " . $this->get_nacionalidade() . "<br>");
			print($this->get_idade() . " anos" . "<br>");
			print($this->get_altura() . " metros de altura" . "<br>");
			print("Pesando: " . $this->get_peso() . " quilos" . "<br>");
			print("Ganhou: " . $this->get_vitorias() . "<br>");
			print("Perdeu: " . $this->get_derrotas() . "<br>");
			print("Empatou: " . $this->get_empates() . "<br><br>");

		}

		public function status(){

			print($this->get_nome() . " é um " .  $this->get_categoria() . " com " . $this->get_vitorias() . " vitorias, "
			 . $this->get_derrotas() . " derrotas e " . $this->get_empates() . " empates.<br><br>");

		}

		public function ganharLuta(){

			$this->set_vitorias($this->get_vitorias() + 1);

		}
		public function perderLuta(){

			$this->set_derrotas($this->get_derrotas() + 1);


		}

		public function empatarLuta(){

			$this->set_empates($this->get_empates() + 1);

		}

		public function set_nome($name){
			$this->nome=$name;

		}

		public function get_nome(){
			return $this->nome;
 
		}

		public function set_nacionalidade($nacionalidadeX){
			$this->nacionalidade=$nacionalidadeX;

		}

		public function get_nacionalidade(){
			return $this->nacionalidade;

		}


		public function set_idade($years){
			$this->idade=$years;

		}

		public function get_idade(){
			return $this->idade;

		}

		public function set_altura($height){
			$this->altura=$height;

		}

		public function get_altura(){
			return $this->altura;

		}

		public function set_peso($weight){
			$this->peso=$weight;

		}

		public function get_peso(){
			return $this->peso;

		}

		public function set_categoria($category){
			if ($category < 52.2) {
				echo "Categoria inválida";
			}
			elseif ($category < 70.3) {
				$this->categoria="Peso leve";

			}

			elseif ($category < 83.9) {
				$this->categoria="Peso médio";

			}

			elseif ($category < 120.2) {
				$this->categoria="Peso pesado";

			}

			else{
				echo "Categoria inválida";

			}

		}

		public function get_categoria(){

			return $this->categoria;

		}

		public function set_vitorias($wins){
			$this->vitorias=$wins;

		}

		public function get_vitorias(){
			return $this->vitorias;

		}

		public function set_derrotas($defeats){
			$this->derrotas=$defeats;

		}

		public function get_derrotas(){
			return $this->derrotas;

		}

		public function set_empates($empate){
			$this->empates=$empate;

		}

		public function get_empates(){
			return $this->empates;

		}

}



?>