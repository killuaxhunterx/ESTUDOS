<?php

    $x = [0,10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $a = count($x);
    $i = 0;

    while($i < $a){

    $numeroAtual = $x[$i];

    if($numeroAtual === 30 || $numeroAtual === 40){
       
        $i++;
        continue;

    }
    echo $numeroAtual . "<br>";
    $i++;
    }









?>