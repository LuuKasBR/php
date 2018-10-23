<?php

require_once("config.php");



$cad = new Cadastro();

$cad->setNome("Lucas Souza");
$cad->setEmail("lucas@gmail.com");
$cad->setSenha("123456");

echo $cad;


?>