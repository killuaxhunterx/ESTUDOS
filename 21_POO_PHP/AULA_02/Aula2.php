<?php


    class Caneta{

        public $cor;

        public $modelo;

        private $ponta;
        protected $carga;

        protected $tampada;


        public function rabiscar(){
        
            if($this->tampada === true){
                
                echo "A caneta está tampada!<br>";
          
            }else{

                echo "Estou rabiscando...<br>";

            }
        }
    
        public function tampar(){
            
            $this->tampada = true;
            
        }
    
        public function destampar(){
            
            $this->tampada = false;

            
        }
    
    }

    

?>