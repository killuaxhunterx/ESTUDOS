<?php
	include "header.php";
	include_once '../INCLUDES/db.inc.php';
	include_once '../INCLUDES/functions.inc.php';
	$db = new Database();
	$database = $db->connect();
?>
<header>
		<section>
			<div class="container-warning-login">
			<?php 

			if(isset($_GET['error'])){
				if ($_GET['error'] == "emptyinput") {
					echo "Preencha todos os campos.";
				}elseif($_GET['error'] == "wronglogin") {
					echo "Login incorreto. Usuário ou senha estão errados..";
				}
			}
		 ?>
		 </div>
		 </section>
</header>

<main>	
		<section>
			<div class="container-login">
				<form action="../INCLUDES/login.inc.php" method="POST">	
					<div>
						<h1>Login in</h1>
					</div>
					<div class="col-form-label mb-3">   
						<label for='uid'>Email ou usuário: </label>
						<input type="text" name="uid" class="form-control" required>
					</div>
					<div class="col-form-label mb-3">   
						<label for='senha' >Senha: </label>
						<input type="password" name="senha" class="form-control" required>
					</div>
					<div class=" mb-3">   
						<button type="submit" name="Submit" >Login</button>
					</div>
					<div>
						<p><a href="signup.php">Não possui registro? Faça agora mesmo.</a></p>
					</div>
				</form>
			</div>
		</section>
	</main>

<?php 
	include_once 'footer.php';
?>

