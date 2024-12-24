<?php

    if(3>2 && 3>1){//true e true

        echo "entrou no IF 1 <br>";

    }


  if(3>3 && 3>1){//false e true
        echo "entrou no IF 2 <br>";
        
    }

    if(3>=3 && 3>6){//true e false
        echo "entrou no IF 3 <br>";
        
    }

    if(3>=4 && 3>5){//false e false
        echo "entrou no IF 4 <br>";
        
    }

    $a = 5;
    $b = 4;
    $c = 5;
    $d = 10;

    if($a > $b && $c < $d){
        echo "entrou no IF 5 <br>";

    }

    if($a >= $c && $c < $d){
        echo "entrou no IF 6 <br>";

    }

    if($a === $b && $c < $d){
        echo "entrou no IF 7 <br>";

    }

    if(($a === $c && $c < $d) && $c < $d){
        echo "entrou no IF 8 <br>";

    }


?>