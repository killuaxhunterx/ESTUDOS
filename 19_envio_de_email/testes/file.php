<?php 


$file = 'testes/user.txt';

if (file_exists($file)) {
	$handle = fopen($file, 'r');
	$contents = fread($handle, filesize('user.text'));

	fclose($handle);
	echo $contents;
}else{
	$handle = fopen($file, 'w');
	$contents = 'Arthur' . PHP_EOL . 'Henrique';
	fwrite($handle, $contents);
	fclose($handle);

}



 ?>