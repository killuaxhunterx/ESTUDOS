<?php 

// $json = '{"a":"Arthur","b":2,"c":3,"d":4,"e":5}';

// $obj = json_decode($json);

// echo $obj->a;


$arr = ['Nome'=>'Arthur', 'Idade'=>21, 'Cidade'=>'Brasilia'];

$obj = json_encode($arr);

echo $obj;



 ?>