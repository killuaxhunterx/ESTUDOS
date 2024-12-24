<?php

    $pp = [
        'Nome' => "Arthur", 
        'Altura' => 1.74, 
        'Idade' => 18, 
        'Estudando' => true];



    $maioridade = 18;
    print_r($pp);
    echo "<br>";
    if($pp['Idade'] >= $maioridade){

        echo "é maior de idade";


    }




?>