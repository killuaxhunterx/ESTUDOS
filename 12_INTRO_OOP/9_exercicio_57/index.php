<?php


    class Car{

        public $cambio;

        public $motor;

        public $cor;

        public $velocidade_maxima;

        function setVelocidadeMaxima($x){

            $this -> velocidade_maxima = $x;

        }

        function getVelocidadeMaxima(){

           echo "A velocidade máxima é de: $this->velocidade_maxima";

        }
    }

    $ferrari = new Car;

   echo $ferrari->cor = "Cor: Amarela<br>";
   echo $ferrari->motor = "Motor: " . 2.3 . "<br>";
   echo $ferrari->cambio = "Câmbio: Automático<br>";




    $veloc = new Car;

    $veloc->setVelocidadeMaxima(60);

    echo $veloc -> getVelocidadeMaxima();

