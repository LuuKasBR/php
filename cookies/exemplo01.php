<?php

$data = array(
	"empresa"=>"kinghost",
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);// nome do cookie, valor retornado, duração

echo "OK";


?>