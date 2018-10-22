<?php

$dt = new DateTime();

//15 dias.
$periodo = new DateInterval("P15D");

//Soma 15 dias da data atual.
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");




?>