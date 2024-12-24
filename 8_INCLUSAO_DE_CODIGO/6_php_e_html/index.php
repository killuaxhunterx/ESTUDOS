<?php


    include_once "backend.php";


    ?>

<h1> Seja bem vindo ao nosso site </h1>

<p> <?= $nome;?> Veja os produtos do nosso site </p>

<ul> 

<?php

foreach($itens as $item): ?>
<li> <?= $item; ?> </li>

<?php endforeach; ?>

</ul>