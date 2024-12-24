<?php

    $arthur = [

        'Nome' => "Arthur",
        'Idade' => 21,
        'Profissão' => "Copywriter"

    ];


    $joao = [
        
        'Nome' => "Joao",
        'Idade' => 20,
        'Profissão' => "Eng. Civil"

    ];

    foreach($arthur as $key => $value){

        echo "$key: $value <br>";

    }


    foreach($joao as $key => $value){

        echo "$key: $value <br>";

    }