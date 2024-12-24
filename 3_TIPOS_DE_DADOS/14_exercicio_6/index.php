<?php

    $carac = ['nome do carro' => "Tucson", 'marca' => "Hundya", 'Câmbio automatico' => true, 'portas' => 4];


    print_r($carac);
    echo "<br>";
    echo "<br>";
    echo $carac['nome do carro'];
    echo "<br>";
    echo $carac['marca'];
    echo "<br>";
    echo $carac['Câmbio automatico'];
    echo "<br>";
    echo $carac['portas'];
    echo "<br>";

    $nomeCarro = $carac['nome do carro'];
    $portas = $carac['portas'];


    echo "O carro é uma $nomeCarro e tem $portas portas";






?>