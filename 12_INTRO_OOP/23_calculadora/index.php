<?php


    class Calculadora {


        public function somar($x, $y){

            echo $x + $y;

        }

        public function subtrair($a, $b){

            echo $a - $b;

        }


        public function multiplicar($c, $d){

            echo $c * $d;

        }

        public function dividir($e, $f){

            echo $e / $f;

        }

    }

    $calc = new Calculadora;

    $calc->somar(1,2);

    echo "<br>";

    $calc->subtrair(100,43);

    echo "<br>";

    $calc->multiplicar(10,98);

    echo "<br>";

    $calc->dividir(89,3);

    echo "<br>";