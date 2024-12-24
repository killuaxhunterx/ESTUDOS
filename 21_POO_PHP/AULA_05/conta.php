<?php

class ContaBanco{

    private $numBanco;

    private $tipo;

    private $dono;

    private $saldo;

    private $status;

    public function __construct(){

        $this->setStatus(false);
        $this->setSaldo(0);

    }


    public function abrirConta($conta){

        if (!$this->getStatus() && $conta=="CC"){
            
            $this->setStatus(true);
            $this->setTipo("Conta Bancaria");

            //print("Parabens, conta corrente aberta com sucesso e você ganhou de bônus R$50!");
            
            $this->saldo=50;

        }

        elseif(!$this->getStatus() && $conta=="CP"){

            $this->setStatus(true);
            $this->tipo="CP";
            $this->saldo=150;
            $this->setTipo("Conta Poupança");


            //print("Parabens, conta poupança aberta com sucesso!");

        }


    }

    public function fecharConta(){
        if ($this->getSaldo() < 0){
            //$this->saldo=0;
            //echo "Voce esta devendo";


        } elseif($this->getSaldo() > 1){

            //echo "Não é possivel fechar a conta, você ainda tem dinheiro.";

        }
        elseif($this->getSaldo() ==0){

            echo "Conta fechada";
            $this->setStatus(false);

        }

    }

    public function depositar($deposito){

        if ($this->getStatus()){

            //print("Digite o valor que você deseja depositar? ");
            $this->saldo+=$deposito;
            

        }
        else{

            //echo "Antes de depositar, abra uma conta";

        }

    }

    public function sacar($saque){

        if ($this->status==true && $this->saldo > $saque){

            //print("Digite o valor que você deseja sacar? ");
           $this->saldo-=$saque;

        }

        elseif($this->saldo < $this->$saque){

            //echo "Saldo insuficiente";

        }

        else{

            //echo "Antes de depositar, abra uma conta";

        }

    }

    public function pagarMensalidade(){
        if($this->tipo=="CC"){
            $this->saldo -= 12;

        }

        else{

            $this->saldo-= 20;

        }
        
    }
    
    public function setNumBanco($num){

        $this->numBanco=$num;

    }


    public function getNumBanco(){

        return $this->numBanco;

    }

    public function setSaldo($sal){

        $this->saldo=$sal;

    }


    public function getSaldo(){

        return $this->saldo;

    }

    public function setDono($owner){

        $this->dono=$owner;

    }


    public function getDono(){

        return $this->dono;

    }


    public function setTipo($type){

        $this->tipo=$type;

    }


    public function getTipo(){

        return $this->tipo;

    }

    
    public function setStatus($a){

        if($a == true){

            $this->status=true;
            

        }

        elseif($a == false){

            $this->status=false;
            

        }
        

    }


    public function getStatus(){

        return $this->status;

    }



}