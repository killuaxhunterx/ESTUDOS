<?php

    $a = 15;
    $b = 5;
    $c = "João";
    $d = "Teste";
    $x = 1;
    $y = 2;
    $z = 3;

    if($a > $b && $c === "João"){
        echo "Primeiro atividade concluida <br>";

    }

    if("teste" > 4 && 1){
        echo "2 atividade concluida <br>";

    }

    if($y == $z && $b >=$z){
        echo "Terceira atividade concluida <br>";

    }

    if([$a > $b && $c === "João"] && ($d > $b && $x) && ($y == $z && $b >=$z)){
        echo "Todas as atividades juntas <br>";

    }

?>