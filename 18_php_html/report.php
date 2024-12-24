<?php
    $primeiro_nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo'];
    $name = $_POST['nome'] . " "  . $_POST['ultimo'];
    $quando_aconteceu = $_POST['quando'];
    $por_quanto_tempo = $_POST['quantos'];
    $descricao_do_alien = $_POST['descricao'];
    $onde_fang_estava = $_POST['estranhos'];
    $email = $_POST['email'];
    $quantos = $_POST['quantidade'];
    $oque_fizeram = $_POST['fizeram'];
    $outros = $_POST['outros'];
    
    $dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase')

    or die('Erros connecting to MySql server.');


$query = "INSERT INTO aliens_abduction (primeiro_nome , ultimo_nome, quando_aconteceu, por_quanto_tempo, " . 

"quantos, descricao_do_alien, oque_fizeram, onde_fang_estava, email, outros) " .

"VALUES ('$primeiro_nome', '$ultimo_nome', '$quando_aconteceu', '$por_quanto_tempo', '$quantos', '$descricao_do_alien', " .

"'$oque_fizeram', '$onde_fang_estava', '$email','$outros') ";


$result = mysqli_query($dbc, $query)

    or die('Error querying database.');


mysqli_close($dbc);





























//$subject = "Aliens me abduziram - Relatório de Abdução";

///$to = "arthurnegaodebsb@gmail.com";
//$msg = $name . " foi abduzido em $quando_aconteceu e esteve ausente por $por_quanto_tempo horas.\n.." .

    //"Números de aliens: $quantos\n.." .
    //"Descrição dos aliens: $descricao_do_alien\n.." .
   // "O que eles fizeram: $fizeram \n.." .
   // "Fang foi visto?: $onde_fang_estava \n.." .
   // "Possui mais alguma coisa a dizer: $outros \n..";

//mail($to, $subject, $msg, 'From: ' . $email);


  //  echo 'Obrigado por enviar o formulário ' . $name ."! <br>";
   // echo 'Você foi abduzido ' . $quando_aconteceu . "<br>";
   // echo 'e foi por... ' . $por_quanto_tempo . " horas" . "<br>";
   // echo 'Número de Aliens: ' . $quantos . "<br>";
   // echo 'Descreva eles: ' . $descricao_do_alien . "<br>";
   // echo 'O que eles fizeram: ' . $fizeram . "<br>";
   // echo 'Fang estava lá? ' . $onde_fang_estava . "<br>";
    //echo 'Possui mais alguma coisa a dizer:' . $outros . "<br>";
   // echo 'Seu endereço de email é: ' . $email . "<br>";


?>

 