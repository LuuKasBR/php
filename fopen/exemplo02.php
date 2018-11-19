<?php

require_once("config.php");

$sql = new Sql();


$usuarios = $sql->select("SELECT * FROM teste ORDER BY id");

//print_r($usuarios);

$headers = array();


foreach ($usuarios[0] as $key => $value) {
		array_push($headers, $key);

}

$file = fopen("usuarios.csv", "w+");//vai criar, caso não exista

fwrite($file, implode (",", $headers));//separador do Array

foreach ($usuarios as $row ) {//foreach nas linhas
	$data = array();

	foreach ($row as $key => $value) {//foreach nos campos
		array_push($data, $value);

	}

	fwrite($file, implode(",", $data) . "\r\n");

}

fclose($file);


?>