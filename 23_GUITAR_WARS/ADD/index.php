<?php 	

require_once "con_DB.php";

$select = "SELECT * FROM guitar_wars";
$query = mysqli_query($db,$select);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	</title>
</head>
<body>

	<h1> Guitar Wars - High Scores </h1>
	<h2> Seja bem vindo ao Guitar Wars, cheque a <a href="add.php">sua pontuação tocando aqui</a></h2>

	<div style="margin-top: 80px;"></div>

	<?php 
	while($row = mysqli_fetch_array($query)){

		echo "Score: " . $row['score'] . "<br>";
		
		echo "Nome: " . $row['nome'] . "<br>";
		
		echo "Data: " . $row['data_exata'] . "<br><br><br><br>";

	}

	 ?>
	
</body>
</html>