<?php 
require_once "pessoa.php";


class Gafanhoto extends Pessoa{
	private $login, $totalAssistindo;

	public function assistirMaisUm(){
		$this->set_totalAssistindo($this->get_experiencia() + $this->get_views());
	}
	public function set_login($login){
		$this->login=$login;
	}
	public function get_login(){
		return $this->login;
	}
	public function set_totalAssistindo($totalAssistindo){
		$this->totalAssistindo=$totalAssistindo;
	}
	public function get_totalAssistindo(){
		return $this->totalAssistindo;
	}




}








 ?>