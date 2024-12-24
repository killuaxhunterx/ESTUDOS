<?php


$a = "O rato roeu o a roupa do rei de Roma";

$x = 0;

function teste($a){

    $x = 0;

    global $a;

for($i = 0; $i < strlen($a); $i++){

    if($a[$i] === "a"){

        $x +=  strlen($a[$i]);

    }

}
echo $x;

}

echo teste($a);