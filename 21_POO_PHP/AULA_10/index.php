<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<pre>
		
		<?php 

		require_once "aluno.php";
		require_once "professor.php";
		require_once "funcionario.php";
		require_once "visitante.php";



		$aluno1 = new Aluno("Arthur", 21, "Masculino");
		$aluno1->fazerMatricula();
		$aluno1->set_curso("Direito");
		$professor = new Professor("Fabio", 45, "Masculino");
		$professor->set_salario(1400);
		$professor->set_especialidade("Matematica");
		$professor->receberAumento(232);
		$professor->fazerAniversario();
		$funcionario = new Funcionario("Marcia", 56, "Feminino");
		$funcionario->set_setor("Limpeza");
		$funcionario->set_trabalhando(false);
		$funcionario->mudarTrabalho("Limpar sala");
		$visitante = new Visitante("Carlos", 68, "Masculino");

		print_r($aluno1);
		print_r($visitante);




		 ?>

	</pre>

</body>
</html>