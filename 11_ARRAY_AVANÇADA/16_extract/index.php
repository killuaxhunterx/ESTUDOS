<?php

    $arr = [
        
        'cor' => "azul",
        'forma' => "retangular",
        'material' => "aço"
          
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Arthur";

    $pessoa = [
        'nome' => "Joao",
        'idade' => 21


    ];

    extract($pessoa);

    echo "esse é o meu nome e a minha idade: $nome, $idade anos<br>";