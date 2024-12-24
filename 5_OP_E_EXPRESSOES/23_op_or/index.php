<?php

    if(3>2 || 5>6){
        echo "comparação 1 verdadeira <br>";


    }


    if(3>3 || 5>4){
        echo "comparação 2 verdadeira <br>";

    }
    
    if(3>1 || 5>4){
        echo "comparação 3 verdadeira <br>";

    }

    if(2>3 || 5>10){
        echo "comparação 4 verdadeira <br>";

    }

    $a = 5;
    $b = 5;
    $c = 10;
    $d = 3;

    if($a > $d || $c < $a){
        echo "comparação 5 verdadeira <br>";


    }

    if(($a > $d || $d > $b) && 1){
        echo "comparação 6 verdadeira <br>";

    }
    if(($a > $d || $d > $b) || 1){
        echo "comparação 7 verdadeira <br>";

    }

?>