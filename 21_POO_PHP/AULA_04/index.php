<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Encapsulamento </title>
</head>
<body>
<pre>
    <?php
    
    require_once "Caneta.php";

    $caneta = new Caneta("Bic", "azul", 0.5);

    print_r($caneta);

    ?>
</pre>
</body>
</html>