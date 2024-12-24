<?php 

interface Publicação {

	public function detalhes($leitor);
	public function abrir();
	public function fechar();
	public function folhear();
	public function avançarPag();
	public function voltarPag();

}



 ?>