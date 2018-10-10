<?php

function ola(){

	//pegar e retornar em um array todos os parametros para essa função
	$argumentos = func_get_args();


	return $argumentos;

}

var_dump(ola("Bom dia"));


?>