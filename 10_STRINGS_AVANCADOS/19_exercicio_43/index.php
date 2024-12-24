<?php


    $a = "carro-navio-helicoptero-carbo-jangada";

    $b = explode("-", $a);

    print_r($b);

    for($i =0; $i < count($b); $i++){

        echo $b[$i] . "<br>";



    }