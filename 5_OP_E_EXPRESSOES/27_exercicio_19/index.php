<?php

    $a = (int) "testando";
    echo $a . "<br>";

    $b = (int) 12.9;
    echo $b . "<br>";

    $c = (int) true;
    echo $c . "<br>";

    $d = (int) [1,2,3];
    echo $d . "<br>";

    if($a === 0){
        echo "é um inteiro 1 <br>";

    }

    if($b === 12){
        echo "é um inteiro 2 <br>";

    }

    if($c === 1){
        echo "é um inteiro 3 <br>";

    }

    if($d === 1){
        echo "é um inteiro 4 <br>";

    }






?>