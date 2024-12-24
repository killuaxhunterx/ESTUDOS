<?php


    class Passenger{

        public $name;

        public $age;

        public $seatNumber;


        public function getName(){

            echo $this->name . "<br>";

        }

        public function getAge(){

            echo $this->age . "<br>";

        }

        public function getSeatNumber(){

            echo $this->seatNumber . "<br>";

        }

        public function setSeatNumber($seatNumber){

             $this->seatNumber = $seatNumber;

        }
    }


    $marcos = new Passenger;

    $marcos->name = "Marcos";

    $marcos->age = 34;

    $marcos->seatNumber = 15;

    $marcos->getName();

    $marcos->getAge();

    $marcos->getSeatNumber();

    $marcos->setSeatNumber(45);
    $marcos->getSeatNumber();

    echo "<br>";

    $junior = new Passenger;


    $junior->name = "Junior";

    $junior->age = 40;

    $junior->seatNumber = 89;

    $junior->getName();

    $junior->getAge();

    $junior->getSeatNumber();

    $junior->setSeatNumber(67);

    $junior->getSeatNumber();
