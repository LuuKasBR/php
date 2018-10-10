<?php

$a = 10;
// O símbolo '&' simboliza passagem de parâmetro por referência. Isto é, o que acontece no parâmetro da função, muda na variável.


function trocaValor(&$a){

	$a += 50;

	return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a)

?>