<?php

    $x = 23;
    echo $x . "global <br>";

    function teste(){
        $x = 34;
        echo $x . "local <br>";


    }

    teste();

    echo $x . "global <br>";
    teste();

    function testando(){
        $x = 56;
        echo $x . "local 2 <br>";

    }

    testando();
    teste();
    echo $x . "global <br>";



?>