<?php

    $a = (int) "5";

    echo $a . "<br>";
    echo $a + 10 . "<br>";

    if($a === 5){

        echo "é um inteiro <br>";

    }

    $b = (float) "34545.676";
    echo $b . "<br>";

    if($b === 34545.676){

        echo "é um double <br>";

    }

    $c = (string) 34545.676;
    echo $c . "<br>";

    if($c === "34545.676"){

        echo "é uma string <br>";

    }


?>