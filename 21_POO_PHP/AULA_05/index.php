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
        include "conta.php";
        
        $joao = new ContaBanco();
        $joao->abrirConta("CC");
        $joao->setNumBanco(1000);
        $joao->getNumBanco();
        $joao->getSaldo();
        $joao->setDono("Arthur");
        $joao->depositar(1000);
        $joao->pagarMensalidade();
        $joao->fecharConta();










        print_r(value: $joao)

        ?>
        
    </pre>
    
</body>
</html>