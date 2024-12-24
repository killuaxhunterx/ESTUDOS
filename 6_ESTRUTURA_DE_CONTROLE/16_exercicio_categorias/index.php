<?php

    function verificarCategoria($a){

        if($a==="eletrônicos"){

           echo "Essa categoria é de produtos eletrônicos<br>";

        }

        else if ($a==="vestuário"){

           echo "Essa categoria é de produtos de vestuário<br>";

        }

        else if($a==="alimentos"){

           echo "Essa categoria é de produtos alimentícios<br>";

        }   else {

          echo "Categoria desconhecida<br>";

        }


    }

    verificarCategoria("eletrônicos");
    verificarCategoria("vestuário");
    verificarCategoria("alimentos");
    verificarCategoria("asdsada");
    verificarCategoria("23");










?>