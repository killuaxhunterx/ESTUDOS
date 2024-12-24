<?php 

include_once "publicacao.php";
include_once "pessoa.php";


class Livro implements Publicação{

	private $titulo; 
	private $autor;
	private $pagAtual;
	private $totalPag; 
	private $aberto;
	private $leitor; 

	public function __construct($titulo, $autor, $totalPag, $pagAtual, $aberto,$leitor){

		$this->set_titulo($titulo);
		$this->set_autor($autor);
		$this->set_totalPag($totalPag);
		$this->set_pagAtual($pagAtual);
		$this->set_aberto($aberto);
		$this->set_leitor($leitor);

	}

	public function detalhes($leitor){

		print("*----------------LIVRO---------------------*<br>");
		print("Nome: " . $this->get_titulo() . ".<br>");
		print("Autor: " . $this->get_autor() . ".<br>");
		print("Total de páginas: " . $this->get_totalPag() . ".<br>");
		print("Página atual: " . $this->get_pagAtual() . ".<br>");
			if ($this->get_aberto()) {
				
				print("Está aberto? Sim.<br>");

			} else{

				print("Está aberto? Não.<br>");

			}

		print("Quem está lendo? " . $leitor->get_nome() . ".<br>");

	}
	public function abrir(){
		if(!$this->get_aberto()){

			$this->set_aberto(true);
			print("Livro aberto. <br>");

		}else{

			print("Livro já estava aberto. <br>");

		}

	}
	public function fechar(){
		if($this->get_aberto()){

			$this->set_aberto(false);
			print("Livro fechado. <br>");

		}else{

			print("Livro já estava fechado. <br>");

		}

	}
	public function folhear(){

		if($this->get_aberto()){

			print("*Folheando o livro* <br>");

		}else{

			print("Primeiro abra o livro.<br>");
		}

	}
	public function avançarPag(){
		if($this->get_aberto()){

			$this->set_pagAtual($this->get_pagAtual() + 1);
		}else{

			print("Primeiro abra o livro.<br>");
		}
	}
	public function voltarPag(){

		if($this->get_aberto()){

			$this->set_pagAtual($this->get_pagAtual() - 1);

		}else{

			print("Primeiro abra o livro.<br>");
		}
	}

	public function set_titulo($titulo){

		$this->titulo=$titulo;
	}

	public function get_titulo(){

		return $this->titulo;
	}

	public function set_autor($autor){

		$this->autor=$autor;
	}

	public function get_autor(){

		return $this->autor;
	}

	public function set_totalPag($totalPag){

		$this->totalPag=$totalPag;
	}

	public function get_totalPag(){

		return $this->totalPag;
	}

	public function set_pagAtual($pagAtual){

		$this->pagAtual=$pagAtual;
	}

	public function get_pagAtual(){

		return $this->pagAtual;
	}

	public function set_aberto($aberto){
		if(strtolower($aberto) === "sim"){

			$this->aberto = true;
		}
		else{
			$this->aberto = false;
		}
	}

	public function get_aberto(){

		return $this->aberto;
	}

	public function set_leitor($leitor){

		$this->leitor=$leitor;
	}

	public function get_leitor(){

		return $this->leitor;
	}

}




 ?>