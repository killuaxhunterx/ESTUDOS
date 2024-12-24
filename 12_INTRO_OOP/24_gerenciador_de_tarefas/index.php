<?php


    class Task {

        public $title;

        public $description;

        public $completed = false;


        public function markAsCompleted($x){

            $this->completed = $x;
           
            if($x === true){


                echo "Tarefa $this->title foi marcada como feita<br>";

            }
        }
        

        public function markAsIncomplete(){
            $this->completed = false;


            echo "Tarefa $this->title não foi terminada<br>";

        }

        public function getDescription(){

            echo "Descrição da tarefa: $this->description<br>";
    }

        public function getTitle(){

            echo "Tarefa: $this->title<br>";
    }

    public function isCompleted ($x){

        $this->completed = $x;
           
        if($x === true){


            echo "Status: Tarefa $this->title foi concluida<br>";

        }else{

        echo "Tarefa $this->title não foi concluida<br>";
            
        }

    }

}

$progamacao = new Task;


$progamacao->title="Estudar progamação";


$progamacao->description="Estudar todos os dias progamação, pelo menos 1 hora por dia!";

$progamacao->getTitle();

$progamacao->getDescription();

$progamacao->markAsCompleted(true);

$progamacao->isCompleted(true);


$leitura = new Task;

$leitura->title="Leitura";

$leitura->description="Ler todos os dias as biografias, e literatura clássica";

echo "<br>";

$leitura->getTitle();

$leitura->getDescription();

$leitura->markAsCompleted(true);

$leitura->isCompleted(true);