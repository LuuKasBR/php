<?php


$pessoa = array(

	'nome'=>'lucas',
	'idade'=>19
);

foreach ($pessoa as &$value){

	// Se o tipo de dado for int, acrescentar 10.
	if (gettype($value) == 'integer') $value +=10;

echo $value.'<br>';

}

print_r ($pessoa);




?>