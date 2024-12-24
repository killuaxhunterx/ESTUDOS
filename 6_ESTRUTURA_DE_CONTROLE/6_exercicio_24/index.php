<?php

    $str = "Teste";
    $int = 20;
    $tr = true;
    $msg = "É Inteiro <br>";
    $msg1 = "Não é Inteiro <br>";


    if(is_int($str)){

        echo $msg;

    } else{

        echo $msg1;

    }

    if(is_int($int)){

        echo $msg;

    } else{

        echo $msg1;

    }

    if(is_int($tr)){

        echo $msg;

    } else{

        echo $msg1;

    }

    





?>