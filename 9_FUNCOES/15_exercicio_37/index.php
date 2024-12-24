<?php


    function defineCorCarro($cor = "Vermelha"){

        return "a cor do carro é $cor" . "<br>";


    }

    $x = defineCorCarro();

    echo $x;

    $y = defineCorCarro("Azul");

    echo $y;