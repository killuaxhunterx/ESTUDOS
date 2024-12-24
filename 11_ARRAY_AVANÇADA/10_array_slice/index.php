<?php

$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

$slice1 = array_slice($arr, 0, 5);

print_r($slice1);

echo "<br>";

$slice2 = array_slice($arr, 4, 4);

print_r($slice2) . "<br>";

echo "<br>";

$slice3 = array_slice($arr, 4, -3);

print_r($slice3) . "<br>";

echo "<br>";

