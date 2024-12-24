<?php

    $cor = "preto";
    $raça = "shitzu";
    $idade = "2 anos";
    $nome = "Mily";


    $pet = compact("cor", "raça", "idade", "nome");
    //print_r($pet);
    
    
    foreach($pet as $arr => $value){
        
        echo "$arr: $value ". "<br>";


    }
