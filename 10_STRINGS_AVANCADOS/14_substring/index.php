<?php

    $x = "essa é a minha string";

    $a = substr($x, 10, 5);

    echo $x . "<br>";
    echo $a . "<br>";

    $y = "essa é a minha string abc";

    $b = substr($y, 8);

    echo $b . "<br>";

    $c = substr($y, 10, -3);
    echo $c . "<br>";
