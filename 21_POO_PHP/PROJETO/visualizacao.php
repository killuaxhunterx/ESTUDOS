<?php 

require_once "gafanhoto.php";
require_once "video.php";


class Visualizacao extends Gafanhoto{

	private $espectador, $filme;

	public function __construct($filme){
		$this->set_espectador($this->get_nome());
		$this->set_filme($filme);

	}

	public function avaliar($avaliar){
		echo $avaliar;
	}
	public function avaliarMedia(){
		print($this->get_avaliacao());
	}
	public function avaliarPorc($avaliar){
		$media = ($avaliar / 100) * $this->get_views();
	}

	public function set_espectador($espectador){
		$this->espectador=$espectador;
	}
	public function get_espectador(){
		return $this->espectador;
	}
	public function set_filme($filme){
		$this->filme=$filme;
	}
	public function get_filme(){
		return $this->filme;
	}

}




 ?>