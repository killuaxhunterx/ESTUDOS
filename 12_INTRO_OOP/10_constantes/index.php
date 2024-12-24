<?php


    Class Humano {

        public const OLHOS = 2;
        public const PERNAS = 2;

        public const BRACOS = 2;

        function getConstant(){

            echo self::OLHOS . "<br>";

        }

    }

    $felipe = new Humano;

   echo $felipe::BRACOS . "<br>";

   $felipe->getConstant();