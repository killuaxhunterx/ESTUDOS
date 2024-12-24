<?php


    $arthur = [

        'Nome' => "Arthur",
        'Idade' => 21,
        'Sobrenome' => "Henrique",
        'Data de nascimento' => 2003,

    ];
   
    
?>
    <table> <?php foreach($arthur as $key => $value){
        echo "$key: $value <br>";


    } ?> </table>
