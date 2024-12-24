<?php

    class Contact{


        public $name;


        public $email;


        public $phone;


        public function getName(){

            echo $this->name;


        }


        public function getEmail(){

            echo $this->email;


        }

        public function getPhone(){

            echo $this->phone;


        }

        public function setEmail($email){

             $this->email = $email;


        }

        public function setPhone($phone){

             $this->phone = $phone;


        }




    }


    $luan = new Contact;

    $luan->name="Luan";

    $luan->email="luan@gmail.com";

    $luan->phone="(61) 9565-2943";

    $luan->getEmail();

    echo "<br>";

    $luan->getName();

    echo "<br>";

    $luan->getPhone();

    $luan->setEmail("lauan@gmail.com");

    echo "<br>";


    $luan->getEmail();

    $luan->setPhone("(61) 45465-7676");

    echo "<br>";


    $luan->getPhone();

    echo "<br>";
    echo "<br>";


    $kaius = new Contact;

    $kaius->name="Kaius";

    $kaius->email="kaius@gmail.com";

    $kaius->phone="(61) 98956-2543";

    $kaius->getName();
    
    echo "<br>";

    
    $kaius->getEmail();

    echo "<br>";

    $kaius->getPhone();

    $kaius->setEmail("kasiias@gmail.com");

    $kaius->setPhone("214123123");

    echo "<br>";

    $kaius->getPhone();

    echo "<br>";

    $kaius->getEmail();

