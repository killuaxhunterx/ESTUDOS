<?php


    $x = new class(){


        public $nome = "Arthur";

    public function nome(){

        echo "Meu nome é $this->nome<br>";

    }


    };

    echo $x->nome . "<br>";


    echo $x->nome();