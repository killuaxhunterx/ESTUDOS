<?php


    Class Cachorro{

        public $nome;

        public $raca;

        public $anos;

        public $cor;

        public function __construct($nome, $raca, $anos, $cor){

            $this->nome = $nome;

            $this->raca = $raca;

            $this->anos = $anos;

            $this->cor = $cor;
            

        }

        public function getConstruct(){

            echo "O nome do cachorro é $this->nome, tem $this->anos dias; é da raça $this->raca e é da cor $this->cor<br>";
        
        }

    

    }


    $mili = new Cachorro("Mili", "Shitzu", 45, "Bege com marrom");




    $mili->getConstruct();

