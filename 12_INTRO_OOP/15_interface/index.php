<?php

    interface Caracteristicas {

        const nome = "Joao";
        public function falar();



    }

    class Arthur implements Caracteristicas{

      public $idade = 21;

        public function falar(){

            echo "Ola mundo!<br>";

        }

    public function getNome(){

        echo "Meu nome é " . self::nome . ".<br>";

    }

    }


    $arthur = new Arthur;

    $arthur->falar();
    $arthur->getNome();