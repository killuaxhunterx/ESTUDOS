

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


<?php

include "../CONNECTION_DB/db_conn.php";

   
    
    //$email = $_POST['remove_email'];

    // query para selecionar todos os dados da tabela
    $query_select = 'SELECT * FROM email_list';


    // result armazena os ID's da query select
    $result = mysqli_query($dbc, $query_select)

    or die('Erro ao conectar com o banco MySql');

    $output_form = false;

    if(isset($_POST['submit'])){
    foreach($_POST['todelete'] as $delete_id){

        $query = "DELETE FROM email_list WHERE id = '$delete_id'";
        $execution = mysqli_query($dbc, $query)
        
        or die('Error ao enviar resposto ao Banco de Dados');
        $output_form = true;

    
    }

    echo "Email(s) removido(s)<br>";

    }

    // percorre os ID's armazenado na variavel $result. Executando o bloco de codigo do loop
    while($row = mysqli_fetch_array($result)){

        // armazena o ID na caixinha
        echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]"/>';

        echo $row['primeiro_nome'];

        echo ' ' . $row['ultimo_nome'];

        echo ' ' . $row['email'];


       // $query = "DELETE FROM email_list WHERE email = '$email'";

       // $deletar_email = mysqli_query($dbc, $query);

       echo "<br>";
       echo "<br>";

    }

    

   // echo "Email removido";
    
    
 
    mysqli_close($dbc);

    if($output_form){
?>

    <input type="submit" name="submit" value="Remove">


</form>

<?php } ?>







