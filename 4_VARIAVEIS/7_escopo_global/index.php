<?php

    $x = "teste";

    echo "$x global 1 <br>";


    if(true){

        $x = "dsa";

        echo "$x if <br>";

    }

    echo "$x global 2 <br>";

    function local(){
        
    $x = 12;
 
        echo "$x local <br>";        


    }


    local();


    function push(){

        global $x;
        $x = 254;
        echo "$x global <br>";        

    }

    push();
    echo "$x global 1 <br>";

?>