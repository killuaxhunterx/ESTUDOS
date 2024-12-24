<?php


    function velocidadeMaxima($vel){

        if(is_int($vel)){
            
            echo "O carro atinge a velocidade máxima quando está em $vel por hora<br>";

    }   else{

        echo "insira um número inteiro <br>";

    }

}

    velocidadeMaxima(48);

    velocidadeMaxima(60);

    velocidadeMaxima(80);

    $x = 100;

    velocidadeMaxima($x);
    velocidadeMaxima("Teste");


    function descrevendoAnimal($nome, $raça){

        echo "<br>O nome do cachorro é $nome da $raça<br>";

    }


    descrevendoAnimal("Bob", "Shitzu");
    descrevendoAnimal("Junior", "puddle");

