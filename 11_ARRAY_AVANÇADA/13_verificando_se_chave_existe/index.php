<?php

    $arr = [
        'nome' => "Arthur",
        'idade' => 21


    ];

    if(array_key_exists("profissão",$arr)){

        echo "A chave existe <br>";




    } else{


        echo "não existe <br>";

    }
    $x = 10;

    if(isset($x)){

        echo "A var existe ISSET <br>";

    } else{


        echo " A var não existe ISSET<br>";

    

    }