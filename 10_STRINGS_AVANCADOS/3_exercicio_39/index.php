<?php

$x = [
    "Feijão" => 30,
    "Arroz" => 20,
    "Cafeiteira" => 5,
    "Pao de queijo" => 2,
    "Café" => 20



];


function teste($a){
    global $x;

    $y = [];
    foreach($a as $b => $preço){

        if($preço >10){

        array_push($y, $b);

    }

}
print_r($y);
}



echo teste($x);