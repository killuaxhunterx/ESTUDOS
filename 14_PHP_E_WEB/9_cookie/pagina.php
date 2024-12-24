<?php

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];
    }

    print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($nome != ""): ?>

        <p> Seja bem-vindo <?= $nome ?></p>
    <h1>Página</h1>

    <?php endif; ?>


</body>
</html>