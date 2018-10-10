<?php

//função passando o return como parâmetro.
function ola($texto = "mundo", $periodo = "bom dia"){

	return "Olá $texto!, $periodo<br>";


}
//se eu deixar os parênteses vazio, vai ficar com a info do parametro. 
echo ola();
echo ola();
echo ola();



?>