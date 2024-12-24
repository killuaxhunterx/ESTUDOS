<?php


    function teste($a){

        
        $y = implode(", ", $a);
        $b = "Você levou esses itens: $y" . "<br>";
        return $b;
    }

    $x = teste(["Carrinho", "Biscoito", "Mamão", "Abacate"]);

    echo $x;

    $lista = ["Carrinho", "Biscoito", "Mamão", "Abacate"];
    function teste2($arr){

        $str = "Você levou esses itens: "; 

        for($i = 0; $i < count($arr); $i++){


        if($i + 1 == count($arr)){

            $str .= "$arr[$i]. ";



        } else{

            $str .= "$arr[$i]. ";


        }


        }

        return $str;


    }

    echo teste2($lista);