<?php

    Trait Objeto {

        public function teste(){

            echo "Testando trait de objeto...<br>";

        }

    }

    trait testando{

        public function testando1(){
            
            echo "Esse método é da trait testando<BR>";


        }
    }

    class Central{

        use testando;
        use objeto;

    }


    $x = new Central;

    $x->teste();
    $x->testando1();


