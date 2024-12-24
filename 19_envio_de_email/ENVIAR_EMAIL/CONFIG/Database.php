<?php 

class Database{
	private $host = 'localhost';
	private $dbname = 'envio_de_email';
	private $user = 'root';
	private $pass = '';
	private $conn;


	public function connect(){
		$this->conn = null;

		try {
			$this->conn = new PDO('mysql:hostname='.$this->host.
			
			';dbname='.$this->dbname,$this->user,$this->pass,
			
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			$this->conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch (PDOException $e) {
			return "CONNECTION ERRO: " . $e->getMessage();
			}	
	}
}


 ?>