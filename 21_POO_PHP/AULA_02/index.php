<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>
</head>
<body>
<pre>

    <?php
    require_once "Aula2.php";

    $c1 = new Caneta;

    $c1->modelo="Azul Cristal";
    $c1->cor="Preta";


    $c1->rabiscar();
    $c1->tampar();
    print_r(value: $c1);
    $c1->rabiscar();

    ?>
</pre>
</body>
</html>