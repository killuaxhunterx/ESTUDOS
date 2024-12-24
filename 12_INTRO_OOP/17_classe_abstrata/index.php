<?php


    abstract class Teste {

       public static function testando(){

        echo "Esse método é uma classe abstrata<br>";

       } 
    
    abstract public function testeAbs();


    }



    Class New1 extends Teste{

         public function testeAbs(){

            echo "Testando método abstrato<br>";

        }

        

    }
    Teste::testando();

    $x = new New1;

    $x->testeAbs();