<?php

    function verificarAcesso($a, $b){

        $c = 18;
        if($a >= $c && $b === true){

            echo "Acesso autorizado<br>";

        } else if($a<$c){

            echo "Acesso negado. Idade mínima requerida: 18 anos<br>";
        }
        else{
            echo "Acesso negado. Autorização necessária";


        }

    }

    verificarAcesso(15, true);









?>