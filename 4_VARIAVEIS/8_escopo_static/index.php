<?php

    function teste(){

        $x = 0;
        $x++;
        echo "$x teste local <br>";


    }

    teste();
    teste();
    teste();


    function testeStatic(){

       static $x = 0;
        $x++;
        echo "$x teste local <br>";


    }

    testeStatic();
    testeStatic();
    testeStatic();



?>