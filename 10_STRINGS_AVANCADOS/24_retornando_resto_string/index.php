<?php

    $str = "testando o resto da string, para ver se da certo";

    $x = strstr($str, "resto");

    echo $x . "<br>"; 

    $a = "string";
    
    $str1 = strstr($str, $a);

    echo $str1 . "<br>";

    if(strstr($str, ".") === false){


        echo "false";

    }