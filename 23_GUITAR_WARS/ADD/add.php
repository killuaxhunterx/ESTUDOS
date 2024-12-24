<?php 

	require_once "con_DB.php";
	$nome = $_POST['nome'];
	$score = $_POST['score'];
	if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['score']) && !empty($_POST['file'])) {

		$query = "INSERT INTO guitar_wars(nome, score)" . 
		"VALUES ('$nome','$score')";

		$result = mysqli_query($db, $query);
		$nome = "";
		$score = "";
		mysqli_close($db);


	}


	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require_once "con_DB.php"; ?>
	<h1>Adicione o seu score<br></h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		
		<label>Nome: </label>
		<input type="text" name="nome" id="nome" value="<?php echo $nome;?>">
		<label>Score: </label>
		<input type="number" name="score" id="score" value="<?php echo $score;?>">
		<br>
		<br>
		<input type="file" name="file" id="file">
		<br>
		<br>
		<input type="submit" id="submit" name="submit">

	</form>

	
</body>
</html>