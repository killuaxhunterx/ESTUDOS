<?php


    class Pessoa{

        function falar(){

            echo "hello world<br>";

        }

        function sum($x, $y){

            $a = $x + $y;
            return $a;

        }

    }

    $arthur = new Pessoa;

    $arthur -> falar();
    $arthur -> falar();

    $caio = new Pessoa;
    $caio -> falar();

    $aio = new Pessoa;
    $b = $aio -> sum(1,2);
    echo $b . "<br>";

    $c = $caio -> sum(1,2);
    echo $c;

