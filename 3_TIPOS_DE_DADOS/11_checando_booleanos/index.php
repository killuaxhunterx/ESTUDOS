<?php


    $x = true;

    if(is_bool($x)){
        echo "é booleano <br>";

    }

    if(is_bool(0)){
        echo "é booleano";

    }

    if(is_bool(0 == false)){
        echo "é sim";

    }


?>