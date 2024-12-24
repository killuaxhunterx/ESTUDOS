<?php

    $x =[true, "Arthur<br>", 12.445, 56, "String<br>", false, 45, 7, "Teste<br>", true];

    $y = count($x);
    $a = 0;

    while($a <= $y){

        if(is_string($x[$a])){

            echo $x[$a];
            

        }

        $a++;
    }








?>