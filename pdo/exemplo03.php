<?php

$conn = new PDO("mysql:dbname=php;host=localhost", "root", "");//String de conexão ao banco

$stmt = $conn->prepare("UPDATE teste SET login = :LOGIN, senha = :PASSWORD WHERE id = :ID");

$login = "registro.alterado@kinghost.com.br";
$password = "111111";
$id = 1;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados alterados com sucesso!";

?>