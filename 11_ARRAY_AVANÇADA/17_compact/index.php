<?php

$marca = "BMW";
$motor = "3.0";
$tetosolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetosolar", "portas", "teste");

print_r($carro);