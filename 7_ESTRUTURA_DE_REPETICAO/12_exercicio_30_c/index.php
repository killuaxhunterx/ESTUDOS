<?php

    $x = [];
    for($i = 0; $i <= 20; $i++){

        array_push($x, $i);
        
    
        if($x[$i] < 10){
            continue;

        }
        
        if($x[$i] % 2 != 0){
            
            echo "$x[$i]<br>";
            
        }

    }        
    
