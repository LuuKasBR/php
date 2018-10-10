<?php

require_once("exemplo03.php");

//gera novo ID de sessão
session_regenerate_id();

echo session_id();


var_dump($_SESSION);

?>