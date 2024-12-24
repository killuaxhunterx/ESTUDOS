<?php


    class Humano{

        public $nome;
        public $idade;
        public $profissao;
        public $nacionalidade;

    public function falar(){

        echo "Olá mundo<br>";

    }

    }

    
    class Profesor extends Humano{

        public $especialidade;
        
        public $cargaHoraria;

    

        public function falar(){

            echo "Olá!<br><br>";


        }

    private function estadoCivil(){

        echo "Não conta para ninguém, mas eu sou divorciado. Não gosto de tocar no assunto.<br><br>";

    }

    public function getEstadoCivil(){

         $this->estadoCivil();


    }

    protected function filhos($x){


        echo "Eles são as minhas joias, quantos? São $x: Felipe, Giovani, Aline, Athos. Para sempre no meu coração... <br>";
    
      

    }

    public function getFilhos($x){

        $this->filhos($x);


    }

    }



    $anselmo = new Humano;

    $anselmo = new Profesor;


    $anselmo-> nome = "Anselmo";

    $anselmo-> idade = 37;

    $anselmo-> profissao = "professor";

    $anselmo-> nacionalidade = "brasileiro";

    $anselmo -> especialidade="portugues";

    $anselmo -> cargaHoraria="40h semanais";




    $anselmo->falar();

    echo "Me chamo $anselmo->nome, tenho $anselmo->idade anos, e atualmente sou $anselmo->profissao; e claro, sou $anselmo->nacionalidade. Hoje, dou aulas de $anselmo->especialidade durante $anselmo->cargaHoraria. <br> <br>";


    echo "Estado Civil: ";

    $anselmo->getEstadoCivil();

    echo "Filhos: ";

    $anselmo->getFilhos(4);