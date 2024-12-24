<?php

    if(10>2){

        echo "entrou no primeiro IF <br>";
        
    
    if(20===20){

        echo "entrou no segundo if <br>";

    }
    }

    if(10>2){

        echo "entrou no primeiro IF 2 <br>";
        
    
    if(20!=20){

        echo "entrou no segundo if 2<br>";

    } else{
        echo "entrou no segundo else 2 <br>";

    }
    }

    if(10<2){

        echo "entrou no primeiro IF 3 <br>";
        
    
    if(20>=20){

        echo "entrou no segundo if 3<br>";

    } else{
        echo "entrou no segundo else 3 <br>";

    }
    
    }   else {
        echo "entrou no primeiro else 3 <br>";

    }

    $escopo = 20;
    if(10>2){

        echo "entrou no primeiro IF 4 <br>" . $escopo;
        
    
    if(20>=20){

        echo "entrou no segundo if 4<br>";

    } else{
        echo "entrou no segundo else 4 <br>";

    }
    
    }   else {
        echo "entrou no primeiro else 4 <br>";
        $escopo1 = 10;
        
        echo "entrou no primeiro IF 4 <br>" . $escopo1;


    }








?>