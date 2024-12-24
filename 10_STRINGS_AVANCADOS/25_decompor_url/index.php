<?php

    $url = "https://www.google.com";

    $array_url = parse_url($url);

    print_r($array_url);
    echo "<br>";

    echo $array_url["host"];
    echo "<br>";

    $url2 = "https://www.horadecodar.com/?busca=php";


    $array_url2 = parse_url($url2);

    print_r($array_url2);
    echo "<br>";
