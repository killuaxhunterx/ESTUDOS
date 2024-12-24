<?php


    class Pessoa{

        function falar(){
            echo "A palavra foi falada";


        }


    }

    $nome = new Pessoa();

    $nome->arthur = "arthur";
    echo $nome->arthur;
    echo "<br>";
    $nome ->falar();




?>