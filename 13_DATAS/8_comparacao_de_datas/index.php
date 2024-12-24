<?php


    $dataA = new dateTime();
    $dataB = new dateTime();

    $dataA->setTime(2025,06,29);

    if($dataA>$dataB){

        echo "Data A é maior do que a Data B<br>";

    } else{


        echo "Data A não é maior do que a data B<br>";
    }



    if($dataA<$dataB){

        echo "Data A é maior do que a Data B<br>";

    } else{


        echo "Data A não é maior do que a data B<br>";
    }


    $dataC = new DateTime();
    $dataC->setTime(2025,06,29);


    if($dataA == $dataC){

        echo "Data A é igual do que a Data C<br>";

    } else{


        echo "Data A não é igual do que a data C<br>";
    }