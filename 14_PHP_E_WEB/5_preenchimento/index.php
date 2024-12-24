<?php

    $usuario = [

        'nome'=> "Arthur",
        'idade'=> 21,
        'profissao'=> "copywriter"



    ];

    if($usuario){

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">

<div> 

    <input type="text" name="nome" placeholder="Digite o seu nome" value="<?= $nome ?>">


</div>

<div> 

    <input type="text" name="idade" placeholder="Digite a sua idade" value="<?= $idade ?> anos">


</div>

<div> 

    <input type="text" name="profissao" placeholder="Digite a sua profissao" value="<?= $profissao ?> ">


</div>


</form>
    
</body>
</html>