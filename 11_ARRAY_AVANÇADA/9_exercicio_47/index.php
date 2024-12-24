<?php

    $carro = ["jaguar", "3.0", "azul", 18, "teto solar", "automático"];

    print_r($carro);

    echo "<br>";

    list($nome, $motor, $cor, $aro, $teto, $cambio) = $carro;

    echo "Nome: $nome <br>";

    echo "Motor: $motor <br>";

    echo "Cor: $cor <br>";

    echo "Aro: $aro <br>";

    echo "Teto: $teto <br>";

    echo "Câmbio: $cambio <br>";

