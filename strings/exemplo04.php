<?php

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);


var_dump($texto);

$texto2 = substr($frase, $q + strlen("mãe"), strlen($frase));
echo "<br>";
var_dump($texto2);

?>