<?php


    $arr = [

        'Arthur' => 21,
        'Maria' => 12,
        'Thiago' => 67,
        'Luan' => 56,
        'Kaius' => 38,

    ];

    asort($arr);

    print_r($arr);

    echo "<br>";
    
    $arr2 = [

        'Arthur' => 21,
        'Maria' => 12,
        'Thiago' => 67,
        'Luan' => 56,
        'Kaius' => 38,

    ];

    arsort($arr2);

    print_r($arr2);

    echo "<br>";

    $arr3 = [

        'Arthur' => 21,
        'Maria' => 12,
        'Thiago' => 67,
        'Luan' => 56,
        'Kaius' => 38,

    ];

    ksort($arr3);
    print_r($arr3);

    echo "<br>";

    $arr4 = [

        'Arthur' => 21,
        'Maria' => 12,
        'Thiago' => 67,
        'Luan' => 56,
        'Kaius' => 38,

    ];

    krsort($arr4);
    print_r($arr4);

    echo "<br>";
