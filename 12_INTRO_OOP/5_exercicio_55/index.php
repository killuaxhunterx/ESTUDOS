<?php


    class Cachorro{

        function latir(){

            echo "Au-au! Au-au!<br>";

        }

        function andar($x){

            echo "*andou $x metros*<br>";

        }


    }

    $jake = new Cachorro;

    $jake -> latir();
    $jake -> andar(10);

echo "<br>";

    $michel = new Cachorro;

    $michel -> latir();
    $michel -> andar(20);
    $michel -> latir();

