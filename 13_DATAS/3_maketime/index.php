<?php

    $dataNascimento = mktime(23, 55, 59, 6, 22,2003);


    echo $dataNascimento . "<br>";

    $showDataNascimento = date('d/m/Y', $dataNascimento);

    echo $showDataNascimento . "<br>";


    $dataFutura = mktime(9,00,00, 9,5,2024);

    $showDataFutura = date('d/m/Y', $dataFutura);

    echo $showDataFutura . "<br>"; 