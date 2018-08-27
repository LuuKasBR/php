<?php

//include "exemplo01.php";

require_once "exemplo01.php";
require_once "exemplo01.php";


// A diferença entre ambos é que caso o arquivo não exista/esteja com erro , a aplicação vai gerar uma exception. O include "tenta" funcionar, e te dá acesso ao INCLUDEPATH, e permite include_dinamico, que fica vulnerável à injeção de código malicioso.

// require_once traz o arquivo só uma vez.


$res = soma(10,2045);

echo $res;

?>