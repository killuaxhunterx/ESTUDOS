<?php


    $carro = [

        'marca' => "BMW",
        'teto solar' => true,
        'motor' => "2.4",
        'cambio' => "manual",
        'portas' => 4

    ];

    $arr = array_keys($carro);

    print_r($arr);

    $values = array_values($carro);

    echo "<br>";
    print_r($values);