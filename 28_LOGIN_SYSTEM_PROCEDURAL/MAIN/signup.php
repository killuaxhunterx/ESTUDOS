<?php
	include_once '../INCLUDES/db.inc.php';
	include_once '../INCLUDES/functions.inc.php';
	include 'header.php';
	$db = new Database();
	$database = $db->connect();
?>
 	
<header>
		<section>
			<div class="container-warning-signup">
			<?php 

			if(isset($_GET['error'])){
				if ($_GET['error'] == "emptyinput") {
					echo "Preencha todos os campos.";

				}elseif($_GET['error'] == "invalidUser") {
					echo "Usuário inválido. Preencha apenas com letras e números.";

				}elseif($_GET['error'] == "Invalidemail") {
					echo "Email inválido. Utilize esse modelo: example@gmail.com.";

				}elseif($_GET['error'] == "pwddontmatch") {
					echo "Senhas não são iguais...";

				}elseif($_GET['error'] == "usernametaken") {
					echo "Usuário já existe. Tente outro.";

				}elseif($_GET['error'] == "emailtaken") {
					echo "Email já registrado. Tente outro.";

				}elseif($_GET['error'] == "nametaken") {
					echo "Nome já existe. Tente outro.";

				}elseif($_GET['error'] == "error") {
					echo "Algo deu errado. Toque aqui para falar conosco e reportar o erro";
				}elseif($_GET['error'] == "none") {
					echo "Inscrição realizada";
				}
			}
		 ?>
		 </div>
		 </section>
</header>
<main>	
		 <section>
			<div class="container-signup">
				<form action="../INCLUDES/signup.inc.php" method="POST">	
					<div>
						<h1>Sign Up</h1>
					</div>
					<div class="col-form-label mb-3">   
						<label for='Nome'>Nome completo: </label>
						<input type="text" name="Nome" class="form-control" required>
					</div>
					<div class="col-form-label mb-3">   
						<label for='email'>Email: </label>
						<input type="email" name="email" placeholder="example123@gmail.com" class="form-control" required>
					</div>
					<div class="col-form-label mb-3">   
						<label for='usuario'>Nome de usuário: </label>
						<input type="text" name="usuario" class="form-control" required>
					</div>
					<div class="col-form-label mb-3">   
						<label for='senha' >Senha: </label>
						<input type="password" name="senha" class="form-control" required>
					</div>
					<div class="col-form-label mb-3">   
						<label for='pwdrepeat'>Repita a sua senha: </label>
						<input type="password" name="pwdrepeat" class="form-control" required>
					</div>
					<div class=" mb-3">   
						<button type="submit" name="Submit" >Sign Up</button>
					</div>
					
				</form>
			</div>
		</section>
</main>
<?php 
	include_once 'footer.php';
?>

