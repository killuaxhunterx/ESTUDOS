
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php

    include "../CONNECTION_DB/db_conn.php";

    
    $primeiro_nome = $_POST['primeiro_nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $output_form = false;

    if(isset($_POST['Submit'])){
        $query = "INSERT INTO email_list(primeiro_nome, ultimo_nome, email)" .

        "VALUES ('$primeiro_nome','$ultimo_nome', '$email')";

        $result = mysqli_query($dbc, $query)
        
        or die('Erro ao conectar com o banco MySql');
    
        $output_form = true;

        echo 'Seu email foi enviado<br>';

    } else{

        $output_form = true;

    }
    mysqli_close(mysql: $dbc);

    
    
if($output_form){
?>
<style> 
        form {
            width: 400px; 
            margin-left: 30px; 
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

</style>
<section>
    

    <section>


        <div>

            <h1 style="font-size: 40px; margin-top: 50px; margin-bottom: 100px;"> FaçaMeUmElvis.com </h1>


        </div>


    <section>

        <div style="margin-left: 35px;font-size: 20px;">
            
            <p> <b>Digite seu primeiro nome, seu último nome e o seu email para ser adicionado a lista de email's da Loja Elvis!</b> </p>

        </div>


    </section>

    </section>

    <div style="margin-left: 35px;">
            

            <label for="primeiro_nome">Primeiro nome: </label>
            <input type="text" id="primeiro_nome" name="primeiro_nome" required>
            <br>
            <br>


        </div>

        <div style="margin-left: 35px;">

            <label for="ultimo_nome">Último nome: </label>
            <input type="text" id="ultimo_nome" name="ultimo_nome" required>
            <br>
            <br>

        </div>

        <div style="margin-left: 35px;">

            <label for="email">Seu email: </label>
            <input type="email" id="email" name="email" required>
            <br>
            <br>


        </div>
        
        <div style="margin-left: 35px;">

            <label for="Submit"></label>
            <input type="Submit" id="Submit" name="Submit" >
            <br>


        </div>
        

    </form>
    </section>

<?php } ?>