<?php


if(isset($_GET['nome'])){

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];    

} else{

    $nome = "Não preenchido";
    $idade = "Não preenchido";

}

?>

<h1> O seu nome é igual a <?= $nome ?>, e você tem <?= $idade ?> anos</h1>