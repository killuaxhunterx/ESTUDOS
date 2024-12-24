<?php


    $data = new DateTime();

    echo $data->format('d/m/Y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";
   
   
    $data->modify('+5 days');


    echo $data->format('d/m/Y') . "<br>";

    $data->modify('+2 month');

    echo $data->format('d/m/Y') . "<br>";


    $data->modify('-3 month');


    echo $data->format('d/m/Y') . "<br>";


