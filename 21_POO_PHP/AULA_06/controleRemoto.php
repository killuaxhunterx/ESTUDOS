<?php

include_once "controlador.php";


class ControleRemoto implements Controlador{

    private $volume;

    private $ligado;


    private $tocando;

    public function __construct(){

        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);


    }

    public function ligar(){
        $this->setLigado(true);
        $this->setTocando(true);

        echo "*TV LIGADA*<br>";

    }
    public function desligar(){
        $this->setLigado(false);


    }
    public function abrirMenu(){
        if($this->getLigado() && $this->getTocando()){

            echo "*TV ESTÁ LIGADA*<br> ";
            echo "*ESTÁ TOCANDO*<br>";
            echo "VOLUME: " . $this->getVolume();

        

            if($this->getTocando()){

                for($i = 0; $i <= $this->getVolume(); $i+=10){
                    echo "i";

                }
                    echo "<br>";
                }
        }
    }
    public function fecharMenu(){


    }
    public function maisVolume(){
        if($this->getLigado()){

            $this->setVolume($this->getVolume() + 5);

        }

    }
    public function menosVolume(){
        
        if($this->getLigado()){

            $this->setVolume($this->getVolume() - 5);

        }

    }
    public function ligarMudo(){

        if($this->getLigado() && $this->getVolume() > 0){

            $this->setVolume(0);
            echo "*MUDO LIGADO*";

        }
    }
    public function desligarMudo(){
        
        if($this->getLigado() && $this->getVolume() == 0){

            $this->setVolume(50);
            echo "*MUDO DESLIGADO*";


        }
    
    }
    public function play(){

        if($this->getLigado() && !$this->getTocando()){

            $this->setTocando(true);

        }

    }
    public function pause(){

        if($this->getLigado() && $this->getTocando()){

            $this->setTocando(false);

        }

    }

    private function setVolume($x){

        $this->volume=$x;


    }

    private function getVolume(){

        return $this->volume;

    }


    private function setLigado($x){

        $this->ligado=$x;


    }

    private function getLigado(){

        return $this->ligado;

    }


    private function setTocando($x){

        $this->tocando=$x;


    }

    private function getTocando(){

        return $this->tocando;

    }


}