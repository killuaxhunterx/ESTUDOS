<?php


    class Animal {

        public $nome;
        function escolherNome($nome){

            $this -> nome = $nome;

        }

        function latir(){

            return "au au<br>";


        }

        function latirForte(){

            return strtoupper($this->latir());


        }
    }


    $x = new Animal;

    $x -> escolherNome("Mili");


    echo "O nome do animal é $x->nome <br>";

   echo  $x -> latir();
    
    echo $x -> latirForte();