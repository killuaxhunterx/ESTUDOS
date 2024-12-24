<?php 
require __DIR__ . "../../LIBS/vendor/autoload.php"; 

Class Database{

	private $host = 'localhost';
	private $dbname = 'login_system';
	private $user = 'root';
	private $pass = '';
	private $conn;


	public function connect(){
		$this->conn=null;

		try {
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
			$this-> conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo "Connection error" . $e->getMessage();
		}
		return $this->conn;
	}
}
