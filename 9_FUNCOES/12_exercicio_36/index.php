<?php

$arr = [];
    
        for($a = 0 ; $a<=30; $a++){

            array_push($arr, $a);

        }


    function teste($array){
        $arrayRetorno = [];

        foreach ($array as $b){


            if($b > 7){

                array_push($arrayRetorno, $b);


            }

        }

        return $arrayRetorno;


    }

    $novoArray = teste($arr);

    print_r ($novoArray);