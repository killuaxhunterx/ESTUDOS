<?php 

// $xml = simplexml_load_file('teste.xml');


// echo $xml->filme->titulo;

// $arr=['Arthur'=>'nome',12=>'idade',1=>'id'];

// $xml = new SimpleXMLElement('<root/>');

// array_walk_recursive($arr, array($xml, 'addChild'));
// file_put_contents('teste.xml',$xml->asXml());



$dom = new DOMDocument('1.0','UTF-8');
$dom->formatOutput = true;

$livros = $dom->createElement('livros');

$dom->appendChild($livros);

$livro = $dom->createElement('livro');
$titulo = $dom->createElement('Titulo','O Hobbit');
$autor = $dom->createElement('Autor','J. R.R. Tolkien');


$livro->appendChild($autor);
$livro->appendChild($titulo);

$livros->appendChild($livro);

header('Content-type: text/xml');

echo $dom->saveXML();


 ?>