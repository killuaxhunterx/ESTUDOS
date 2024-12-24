<?php 

$nome = @$_POST['nome'];
$sobreNome = @$_POST['Sobrenome'];

	if(isset($_POST['Submit'])){
		$pdo = new PDO('mysql:host=localhost;dbname=php_danki', 'root', '');

		$sql = $pdo->prepare("INSERT INTO php_learning(nome, sobrenome) VALUES (?, ?)");

		$sql->execute(array($nome, $sobreNome));
		$sql = null;
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
 

 	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
 		
 		<label for="nome">Nome</label>
 		<input type="text" name="nome" id="nome">
 		<label for="Sobrenome">Sobrenome</label>
 		<input type="text" name="Sobrenome" id="Sobrenome">
 		<input type="submit" name="Submit" id="Submit">




 	</form>

 </body>
 </html>