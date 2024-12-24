<?php 

require_once "con_DB.php"; 


class Insert{

	private $table, $value1, $value2;

	public function insertInto(){
		$query = "INSERT INTO $this->getTable()($this->getValue1(), $this->getValue2)". "VALUES ($this->getValue1(), $this->getValue2)";
			mysqli_close($db);

	}

	public function setTable($table){
		$this->table=$table;
	}
	public function getTable(){
		return $this->table;
	}
	public function setValue1($value1){
		$this->value1=$value1;
	}
	public function getValue1(){
		return $this->value1;
	}
	public function setValue2($value2){
		$this->value2=$value2;
	}
	public function getValue2(){
		return $this->value2;
	}



}




 ?>