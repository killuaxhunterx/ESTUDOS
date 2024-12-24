<?php


    function soma(){

        echo 3 + 4 . "<br>";

    }
    
    soma();

    function isInt($a){

        if(is_int($a)){

            echo "É um inteiro<br>";

        } else{

            echo "Não é um inteiro<br>";
        }

    }


    isInt("Arthur");
    isInt(10);

  echo strtoupper("frase toda em maiscula<br>");