<?php

    class Pessoa{

        public $nome;

        public $idade;

        function andar($a, $x){

            echo "$a andou $x metros. <br>";

        }


    }

    $arthur = new Pessoa;


    echo $arthur -> nome = "Arthur". "<br>";

    $arthur -> idade = 34;

    echo $arthur -> idade . "<br>";

    echo "O meu nome é $arthur->nome e tenho $arthur->idade anos<br>";

    $arthur -> andar("Joao", 90);


    $x = new Pessoa;

    $x-> nome = "Marcos";
    $x->idade = 45;

    echo "$x->nome tem $x->idade anos";