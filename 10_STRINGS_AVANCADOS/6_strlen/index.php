<?php



    $x = "Essa string é grande";
    $y = "Essa string pode ser pequena diferente da anterior";

    echo strlen($x) . "<br>";
    echo strlen($y) . "<br>";

    $len1 = strlen($x);
    $len2 = strlen($y);

    if($len1 > $len2){

        echo "Len1 é maior do que len2 <br>";


    } else{


        echo "Len2 é maior do que len1 <br>";
    }

    
