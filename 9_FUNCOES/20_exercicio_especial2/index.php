<?php

function teste($a){

    for($i = 2; $i < $a; $i++){

        if ($a <= 1) {
            echo "não é primo pois não é maior do que 1<br>";
            return false;
        }

       $x = $a *$a;
if($a % $i == 0){

    echo "não é primo pois tem mais de 2 divisores ou não é maior do que 1<br>";
    return false;

    } 
   
    
 
else {
    echo "é primo pois tem mais de 2 divisores ou não é maior do que 1<br>";
    return true;


}
}
}
$y = teste(1);
echo $y ? "true": "false";