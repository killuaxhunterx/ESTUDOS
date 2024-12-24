<?php

    class Humano {

        public function falar(){


            echo "Oi<br>";


        }


    }

    $arthur = new Humano;

    $teste = 10;

    if(is_object($arthur)){

        echo "É um objeto<br>";

    } else{

        echo "Não é um objeto<br>";
    }


    if(is_object($teste)){

        echo "É um objeto<br>";

    } else{

        echo "Não é um objeto<br>";
    }

    echo get_class($arthur) . "<br>";


    if(method_exists($arthur, "falar")){

        echo "Metodo existe<br>";

    } else{
    
        echo "Metodo não existe<br>";
    }


    if(method_exists($arthur, "asdas")){

        echo "Metodo existe<br>";

    } else{
    
        echo "Metodo não existe<br>";
    }