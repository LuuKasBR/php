<?php

$conn = new PDO("mysql:dbname=php;host=localhost", "root", "");//String de conexão ao banco

$stmt = $conn->prepare("DELETE FROM teste where id=:ID");

$id = 3;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados excluídos com sucesso!";

?>