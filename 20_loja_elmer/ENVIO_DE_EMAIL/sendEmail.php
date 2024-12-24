<?php

    include "../CONNECTION_DB/db_conn.php";
    //Guarda o resultado do formulário
    $assunto = $_POST['assunto'];
    $corpo_email = $_POST['corpo_email'];
    $from = 'arthur489410@gmail.com';
    $output_form = false;
    
    if(isset($_POST['Submit'])){

    //Verifica se o assunto e corpo de email foram preenchidos
    if(empty($assunto) && empty($corpo_email)){
        echo "Você esqueceu de preencher o assunto e o corpo do email";
        $output_form = true;

    }

    //Verifica se o assunto foi preenchido
    if(empty($assunto) && (!empty($corpo_email))){

        echo "Você esqueceu de preencher o assunto do email";
        $output_form = true;

    }

    //Verifica se o corpo do email foi preenchido
    if((!empty($assunto)) && (empty($corpo_email))){

        echo "Você esqueceu de preencher o corpo do email";
        $output_form = true;

    }

    if((!empty($assunto)) && (!empty($corpo_email))){
        
        echo 'Seu email foi enviado';

        $query = "SELECT * FROM email_list";

        //A variavel result armazena o ID do recurso que está no DB
        $result = mysqli_query($dbc, $query);

        //Percorre(dentro do LOOP) os ID que está armazenado na variavel $result
        while($row = mysqli_fetch_array($result)){

            $primeiro_nome = $row['primeiro_nome'];
            $ultimo_nome = $row['ultimo_nome'];
            $to = $row['email'];

            $msg = "Caro $primeiro_nome $ultimo_nome,\n $corpo_email";


            mail($to, $assunto, $msg, 'From: ' . $from);

            echo 'Email enviado para: ' . $to . '</br>';
        }
} 

    } else{

        $output_form = true;
    }

    mysqli_close($dbc);

    if($output_form){
?>

    <section>

    <div style="margin-top:80px; font-size:30px;margin-left: 20px;">

        <h1> Private: Uso apenas para o elvis. </h1>

    </div>

    <div style="margin-top:10px; font-size:25px; margin-left: 20px;">

        <p>Escreva e envie um email para a lista de email dos membros</p>

    </div>


</section>


<section>

    <div style="margin-top:10px; font-size:20px; margin-left: 20px;">

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >

            <label for="assunto"> Assunto do email:</label>
            <input type="text" id="assunto" name="assunto" value = "<?php echo $assunto; ?>">
            <br>
            <br>


            <label for="corpo_email"> Corpo do Email:</label>
            <br>
            <textarea name="corpo_email" id="corpo_email" rows="10" cols="40" > <?php echo $corpo_email; ?> </textarea>
            <br>
            <br>

            <input type="submit" name="Submit" value="Enviar">


        </form>
        
    </div>

</section>

<?php

    }

?>