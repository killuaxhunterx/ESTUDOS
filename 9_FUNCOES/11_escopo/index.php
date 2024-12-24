<?php

$a = 10;
$b = 3;

    function teste(){

        $a = 5;

        global $b;
        static $c = 0;

        $c++;
        $a++;
        $b++;

        echo "escopo local de $a<br>";

        echo "Escopo global na função de B: $b<br>";
       
        echo "Escopo de Static: $c<br>";

    }

echo "escopo global de $a<br>";

echo "Escopo global de B: $b<br>";

teste();

echo "Escopo global alterado na função de B2: $b<br>";

teste();
