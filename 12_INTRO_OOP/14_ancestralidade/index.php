<?php


    class Humano{


    }

    Class Animal{



    }

    Class Professor extends Humano{


    }

$arthur = new Humano;

$mili = new Animal;

if($arthur instanceof Humano){

    echo "Arthur é um humano<br>";


} else{

    echo "Arthur não é humano<br>";

}


if($mili instanceof Humano){

    echo "Mili é um humano<br>";


} else{

    echo "Mili não é humano<br>";

}


if($mili instanceof Animal){

    echo "Mili é um animal<br>";


} else{

    echo "Mili não é animal<br>";

}

$marcos = new Professor;

if($marcos instanceof Humano){

    echo "Marcos é um humano<br>";


} else{

    echo "Marcos não é humano<br>";

}
