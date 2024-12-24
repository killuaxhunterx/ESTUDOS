<?php

    $arr = range(10,45);

    for($i = 0; $i < count($arr); $i++){

        $x = $arr[$i] + 6;
        echo "<br>";
        if($x > 30){
            echo "o numero é muito alto<br>";
            break;

        }
print_r($x);
    }
