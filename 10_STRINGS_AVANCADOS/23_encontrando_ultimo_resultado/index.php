<?php

    $str = "testando encontrado palavra teste, em uma string que tem teste";

    $x = strrpos($str, "teste");

    echo $x . "<br>";

    if(strrpos($str, "java") === false){

        echo "deu false, palavra não encontrada<br>";


    }

    $p = substr($str, strrpos($str, "teste"), 5);
    echo $p;