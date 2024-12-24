<?php

    $x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    $a = count($x);

    for($i = 0; $i < $a; $i++){

        $numeroAtual = $x[$i];

        if($numeroAtual % 2 != 1){

            echo "$numeroAtual <br>";


        }
        
    }












?>