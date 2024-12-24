<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>
</head>
<body>

    <?php
    require_once "Caneta.php";

    $c1 = new Caneta; 

    $c1->cor="Azul";
    $c1->carga="100%";
    $c1->modelo="Bic";
    $c1->tampada = false;

    print_r(value: $c1);
    $c1->Destampar();

    $c1->Rabiscar();

    echo "<br>";
    echo "<br>";


    $c2 = new Caneta;

    $c2->cor="Vermelha";
    $c2->carga="50%";
    $c2->modelo="Generica";
    $c2->tampada = true;

    print_r($c2);

    ?>
    
</body>
</html>