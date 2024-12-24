<?php


    $data = new DateTime();

    print_r($data);

    echo "<br>";

    $data->setDate(1967,8,20);

    print_r($data);

    echo "<br>";

    $data->setTime(12,30,00);

    print_r($data);

    echo "<br>";
    

    echo $data->format('d/m/Y');


