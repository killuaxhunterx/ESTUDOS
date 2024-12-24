<?php


    Class Humano{

        public $nome = "arthur";

        public $idade;

        function falar(){

            echo "Hello world<br>";

        }

    private function gritar($x){

       $y =  strtoupper($x);

       echo $y . "<br>";

    }

    public function getGritar($x){


        return $this->gritar($x);

    }

    protected function falarBaixo($a){

        $b =  strtolower($a);
        echo $b . "<br>";

    }

    public function getFalarBaixo($a){

        $this->falarBaixo($a);

    }


    }

    class Progamador extends Humano{


    }

    $joao = new Humano;

    $joao->falar();


    $arthur = new Progamador;

    $arthur->falar();

   echo $arthur->idade=21 . "<br>";

    $arthur->getGritar("aaaa");

    $joao-> getGritar("aaaa");

    $joao->getFalarBaixo("BAIXO");

    $arthur->getFalarBaixo("BAIXO");