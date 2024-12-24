<?php


function sumEvenNumbers($a){

    $x = 0;

    $y = [];

    for($i = 0; $i<=$a; $i++){

   

    array_push($y, $i);
    }

    foreach($y as $b){     

    if($b % 2 === 0 ){

    $x += $b;
        
    }
}  

return $x . "<br>";

}






$y = sumEvenNumbers(10);
echo $y;