<?php

    function teste($a){

        $x = [];

        for($i = 0; $i < $a; $i++){

            array_push($x, $i);


        }
        print_r ($x);

    }

teste(5);