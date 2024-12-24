<?php

    $cincoDias = strtotime('5 days');

    echo $cincoDias . "<br>";

    $dezDias = strtotime('10 days');

    echo $dezDias . "<br>";

    $dataAtualMaisCinco = date('d/m/Y', $cincoDias);

    echo $dataAtualMaisCinco . "<br>";


    $dataAtualMaisDez = date('d/m/Y', $dezDias);

    echo $dataAtualMaisDez . "<br>";

    $doisMeses = strtotime('2 months');

    $dataAtualMaisDoisMeses = date('d/m/Y', $doisMeses);

    echo $dataAtualMaisDoisMeses . "<br>";

    $dezAnos = strtotime('10 years');

    $dataAtualMaisDezAnos = date('d/m/Y', $dezAnos);

    echo $dataAtualMaisDezAnos . "<br>";
