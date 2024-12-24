<?php

    $arr = ["batata", "maça", "pera", "feijão", "arroz"];

    $removidos = array_splice($arr, 2,-1);

    print_r($removidos);