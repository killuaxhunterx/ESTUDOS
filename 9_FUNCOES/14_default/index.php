<?php

    function teste($a = "Teste<br>"){

        echo $a;

    }



teste();

teste("Arthur<br>");

function teste1($b, $a = "deafult"){


    echo "o valor de B é:$b e de A é: $a <br>";

}

teste1(1, "default");