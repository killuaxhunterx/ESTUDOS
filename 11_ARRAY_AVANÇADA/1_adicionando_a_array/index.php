<?php


    $x = [];
    print_r($x);
    echo "<br>";

    $x[0] = 10;
    print_r($x);
    echo "<br>";


    $x[1] = "Arthur";
    print_r($x);
    echo "<br>";

    $x[5] = true;
    print_r($x);
    echo "<br>";

    $x[0] += 57;
    print_r($x);
    echo "<br>";

    $arrSoc = [];

    $arrSoc["carro"] = "bmw";
    echo "<br>";

    print_r($arrSoc);


    $arrSoc["aviao"] = "boing";
    echo "<br>";

    print_r($arrSoc);

    $arrSoc["carro"] = "ferrari";
    echo "<br>";
    print_r($arrSoc);
    echo "<br>";

    $x = count($arrSoc);
    
    echo $x;

