<?php

    print_r($_SERVER);

    echo "<br>";
    echo "<br>";


    echo $_SERVER['HTTP_HOST'] . "<br>";
    
    echo "<br>";
    echo "<br>";


    if($_SERVER['SERVER_NAME'] == "localhost"){


        echo "O usuário está acessando o local host<br>";

    }