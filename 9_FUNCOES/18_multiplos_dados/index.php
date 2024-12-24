<?php


function teste($nome, $idade){

    $nome = "O seu nome é: $nome";
    
    $idade = "E tem $idade anos";
    return [$nome, $idade];

}

$operaDados = teste("Arthur", 20);
print_r($operaDados);