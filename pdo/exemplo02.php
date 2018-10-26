<?php

$conn = new PDO("mysql:dbname=php;host=localhost", "root", "");//String de conexão ao banco

$stmt = $conn->prepare("INSERT INTO teste (login, senha) VALUES (:LOGIN, :PASSWORD)");

$login = "eduardo.machado@kinghost.com.br";
$password = "0000000";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido com sucesso!";

?>