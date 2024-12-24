<?php

    $i = 10;

    while($i > 0){

        echo $i . "<br>";
        $i--;
    
    if($i === 5 || $i === 3){
        echo "essa instrução foi pulada<br>";
        $i--;
        continue;


    } if($i === 1 ){
        echo "break<br>";
        break;


    }


    }









?>

