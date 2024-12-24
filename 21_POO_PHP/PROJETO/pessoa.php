<?php 
require_once "video.php";

abstract class Pessoa extends Video{
	private $nome, $idade, $sexo, $experiencia;


	protected function ganharXp(){
		if($this->get_experiencia() <= 5){
			echo "Noob<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}elseif($this->get_experiencia() >= 10){
			echo "Iniciante<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 25){
			echo "Soldado<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 50){
			echo "Cabo<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 80){
			echo "Sargento<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 100){
			echo "Tenente<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 130){
			echo "Capitao<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
		elseif($this->get_experiencia() >= 200){
			echo "Coronel<br>";
			$this->set_experiencia($this->get_experiencia() + 1);
		}
	}

	public function __construct($nome, $idade, $sexo){
		$this->set_nome($nome);
		$this->set_idade($idade);
		$this->set_sexo($sexo);

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
	public function set_experiencia($experiencia){
		$this->experiencia=$experiencia;
	}
	public function get_experiencia(){
		return $this->experiencia;
	}

	public function get_ganharXp(){
		return $this->ganharXp();
	}
}
	







 ?>