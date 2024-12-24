<?php


    class Schp{

        public $marca;

        public $cor;

        public $portas;

    function __construct($marca, $cor, $portas){


        $this->marca = $marca;
        $this->cor = $cor;
        $this->portas = $portas;

    }
         

    }

    $ferrari = new Schp("Ferrari", "Vermelha", 4);

    echo "O carro é da marca $ferrari->marca, tem $ferrari->portas portas e é da cor $ferrari->cor <br>";

    $BMW = new Schp("BMW", "Azul", 4);

    echo "O carro é da marca $BMW->marca, tem $BMW->portas portas e é da cor $BMW->cor <br>";
