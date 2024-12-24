<?php


    $a = is_int(5);//true
    $b = is_int("Vendo sim");//false

    if($a){
        echo "É inteiro";
        echo "<br>";

    }

    if($b){
        echo "É inteiro";

    }

    if(is_int(10)){
        echo "10 É inteiro";


    }


?>