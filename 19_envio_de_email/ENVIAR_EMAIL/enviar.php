<?php


    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
    $sobreNome = filter_input(INPUT_POST, 'ultimo',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
    $to = filter_input(INPUT_POST, 'for',FILTER_VALIDATE_EMAIL);
    $subject =filter_input(INPUT_POST, 'subject',FILTER_VALIDATE_EMAIL);
    $corpo_email = filter_input(INPUT_POST, 'corpo',FILTER_VALIDATE_EMAIL);

    $msg = $corpo_email;


    mail($to, $subject, $msg);

?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARABENS!</title>
</head>
<body>

<section>

    <h1 style="text-align: center;font-size: 40px"> O email foi enviado. <br>
    <small>Veja tanto a caixa de entrada como o spam.</small></h1>

</section>

    
</body>
</html>

