<?php

    $x = "estamos testando o metodo strpos, com o strpos podemos encontrar strings<br>";

    $y = strpos($x, "strpos");

    echo $y;

    $a = strpos($x, "starpos");

    echo $a . "<br>";


    if($a === false){

        echo "é falso<br>";

    }


    $c = "com";

    $d = strpos($x, $c);

    echo $d . "<br>";

    $p1 = "to";
    $p2 = strpos($x, $p1);

    echo $p2 . "<br>";