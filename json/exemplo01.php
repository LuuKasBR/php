<?php


$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Lucas',
	'idade'=>'19'
));

array_push($pessoas, array(
	'nome'=>'Eduardo',
	'idade'=>'50'

));



print_r($pessoas);
echo "<br>";
//print_r($pessoas[0]['nome']);

//Passando array pro JSON

echo json_encode($pessoas);


?>


