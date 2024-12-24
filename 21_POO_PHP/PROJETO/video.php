<?php 

require_once "interfaceAcoes.php";

abstract class Video implements Ações{
	private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

	public function play(){
		if(!$this->get_reproduzindo()){
			echo "*tocando*<br>";
			$this->set_reproduzindo(true);
		}else{
			echo "Já esta tocando<br>";
		}
	}
	public function pause(){
		if($this->get_reproduzindo()){
			echo "*pausado*<br>";
			$this->set_reproduzindo(false);
		}else{
			echo "Já esta pausado<br>";
		}
		
	}public function like(){
		$this->set_curtidas($this->get_curtidas() + 1);
	}
	public function set_titulo($titulo){
		$this->titulo=$titulo;
	}
	public function get_titulo(){
		return $this->titulo;
	}
	public function set_avaliacao($avaliacao){
		$media = ($this->avaliacao + $avaliacao) / $this->get_views();
		$this->avaliacao=$media;
	}
	public function get_avaliacao(){
		return $this->avaliacao;
	}
	public function set_views($views){
		$this->views=$views;
	}
	public function get_views(){
		return $this->views;
	}
	public function set_curtidas($curtidas){
		$this->curtidas=$curtidas;
	}
	public function get_curtidas(){
		return $this->curtidas;
	}
	public function set_reproduzindo($reproduzindo){
		$this->reproduzindo=$reproduzindo;
	}
	public function get_reproduzindo(){
		return $this->reproduzindo;
	}
}






 ?>