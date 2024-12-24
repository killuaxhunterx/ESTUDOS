<?php

    function calcularDesconto($a, $b){
       
        $x = $a * (10/100);
        $y = $a - $x;

        switch($b === "eletrônicos"){

            
            case "eletrônicos":
                echo "Valor com desconto: $y || Categoria: eletrônicos<br>";
                break;

        }
        
        $x = $a * (20/100);
        $y = $a - $x;

        switch($b === "vestuário"){

            
            case "vestuário":
                echo "Valor com desconto: $y || Categoria: vestuário<br>";
                break;

        }

        $x = $a * (5/100);
        $y = $a - $x;

        switch($b === "alimentos"){

            
            case "alimentos":
                echo "Valor com desconto: $y || Categoria: alimentos<br>";
                break;

        }
        $x = $a * (0/100);
        $y = $a - $x;

        switch($b === "Outras categorias"){

            
            case "Outras categorias":
                echo "Valor sem desconto: $y || Categoria: Outras categorias<br>";
                break;

        }
        $x = $a * (0/100);
        $y = $a - $x;

        if($b != "Outras categorias" && "eletrônicos" && "vestuário" && "alimentos"){

                echo "Valor original: $y || Categoria: Categoria desconhecida<br>";

        }

    }

    calcularDesconto(1000, "eletrônicos");
    calcularDesconto(2000, "vestuário");
    calcularDesconto(15, "alimentos");
    calcularDesconto(100, "Outras categorias");
    calcularDesconto(50, "a");