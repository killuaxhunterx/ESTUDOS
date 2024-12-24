<?php 


class Read{

	private $conn;
	public $table;

	private $usersEmail;
	private $usersName;
	
	public function __construct($database){
		$this->conn=$database;
	}

	public function read_usuario($usario,$email){

		$query = "SELECT * FROM users WHERE usersUid = :usersUid OR usersEmail = :usersEmail";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':usersEmail', $email, PDO::PARAM_STR);
		$stmt->bindParam(':usersUid', $usario, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt;
	}
	public function read_nome($nome){

		$query = "SELECT * FROM users WHERE usersName = :usersName";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':usersName', $nome, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt;
	}
	public function read_email($email){

		$query = "SELECT * FROM users WHERE usersEmail = :usersEmail ";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':usersEmail', $email, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt;
	}
}







 ?>