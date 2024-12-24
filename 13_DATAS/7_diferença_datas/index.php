<?php


    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataA->setDate(2005,6,25);


    print_r($dataA);

    echo "<br>";


    $dataB->setDate(2018,1,05);


    print_r($dataB);

    echo "<br>";


    $diff = $dataA->diff($dataB);

    print_r($diff);

    echo "<br>";
    

    echo $diff->format('%a days');

  