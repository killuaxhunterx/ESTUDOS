<?php 

$conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae felis tellus. Proin fermentum ullamcorper lorem, at aliquam arcu. Aenean non consequat quam. Suspendisse efficitur, ex non congue ultricies, neque tortor commodo nibh, in dapibus tortor nibh varius augue. Aliquam in semper nulla, vitae faucibus nulla. Pellentesque rutrum sed nulla ac fermentum. Integer maximus pharetra arcu, in consectetur diam fermentum eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer et enim velit. Morbi luctus interdum pulvinar. Quisque auctor interdum rutrum. Phasellus congue at erat fermentum feugiat. Suspendisse vulputate augue vel pulvinar iaculis.";



$nome = substr($conteudo, 0, 20);
echo $nome . "<br>";

$meuNome = "Arthur Henrique Noronha Campelo da sCunha";
$nomes = explode(" ", $meuNome);
// print_r($nome);
$nome = implode(" ", $nomes);
print_r($nome);
$html = "<h2>Titulo</h2>";
$remove = strip_tags($html);
echo $remove;










 ?>