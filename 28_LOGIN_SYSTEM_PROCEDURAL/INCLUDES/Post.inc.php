<?php 


class Post{

	private $conn;

	public function __construct($db){
		$this->conn=$db;
	}

	public function write($nome,$email,$senha,$usuario){
		$query = "INSERT INTO users(usersName, usersEmail, usersPwd, usersUid) VALUES(:usersName, :usersEmail,:usersPwd,:usersUid)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":usersName",$nome, PDO::PARAM_STR);
		$stmt->bindParam(":usersEmail",$email, PDO::PARAM_STR);
		$stmt->bindParam(":usersPwd",$senha, PDO::PARAM_STR);
		$stmt->bindParam(":usersUid",$usuario, PDO::PARAM_STR);
		$stmt->execute();
		return $this->conn;

	}
}

 ?>