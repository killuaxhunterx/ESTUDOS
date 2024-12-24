<?php


    function teste($nome, $idade){

    if(is_string($nome) && is_int($idade)){
       echo "Olá eu sou o $nome e tenho $idade anos<br>";

    } else {

        echo "insira seu nome sem números ou caracteres especiais. E a sua idade apenas com números inteiros. <br>";
    }

}

    teste("Arthur", 20);
    teste("Arthur", 20.3);
    teste(10, 20);
    teste("João", 15);
