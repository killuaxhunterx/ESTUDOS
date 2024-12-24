<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 4, 234];


    function sum($a, $b){

        return $a + $b;

    }

    function sub($a, $b){

        return $a - $b;

    }

    $resultado = array_reduce($arr, "sum");

    echo "$resultado <br>";

    $resultado1 = array_reduce($arr, "sub");

    echo "$resultado1 <br>";