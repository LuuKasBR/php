<?php
					//host, usuario, senha, base
$conn = new mysqli("localhost","root", "", "php");

if ($conn->connect_error){
		echo "Error: " .$conn->connect_error;

}


$stmt = $conn->prepare("INSERT INTO teste (login, senha) VALUES (?, ?)");//Serve para enviar um comando ao banco de dados

$stmt->bind_param("ss", $login, $pass);//define o tipo de dado e valores que será passado no parâmetro. 's'=string, 's'=string

$login = "lucas.souza@kinghost.com.br";
$pass = "123456";

$stmt->execute();//envia o comando pro banco

$login = "pedro.santos@kinghost.com.br";
$pass = "654321";

$stmt->execute();



?>