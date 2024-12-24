<?php


    class Car {

        public $rodas = 4;
        private $vidro = "Sem pelicula";

        protected $portas = 4;

        public function alterarVidro($vidro){

            $this -> vidro = "Com pelicula";


        }

        public function getVidro(){

            return $this -> vidro;

        }

        public function getPortas(){

            return $this -> portas;

        }

    }

    Class Mecanico{


        public function x($x){

            $x ->rodas = 10;


        }

        public function y($y){

            $y ->vidro = "Com pelicula";


        }

    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $arthur = new Mecanico;

    $arthur->x($carro);

    echo $carro->rodas . "<br>";

    //echo $carro -> vidro . "<br>";

    //$vidro = new Mecanico;

   // $vidro->y($carro);

    echo $carro -> getVidro() . "<br>";

    echo $carro-> getPortas() . "<br>";