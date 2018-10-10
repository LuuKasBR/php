<?php

// As '...' realiza a definição do tipo de parâmetro.
// o ':' define o tipo de dado que eu estou recebendo
function soma(int...$valores):string {


	return array_sum($valores);


}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(2351,54545);
echo "<br>";
echo soma(1.5,3.2);


?>