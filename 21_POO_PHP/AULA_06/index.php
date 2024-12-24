<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <pre>

        <?php
            require_once "controleRemoto.php";


            $controle1 = new ControleRemoto();
            
            $controle1->ligar();
            $controle1->maisVolume();
            $controle1->maisVolume();
            $controle1->abrirMenu();

            print_r($controle1);



        ?>


    </pre>

    
</body>
</html>