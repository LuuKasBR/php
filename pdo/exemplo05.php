<?php

$conn = new PDO("mysql:dbname=php;host=localhost", "root", "");//String de conexão ao banco

$conn->beginTransaction();// commit = confirmar; rollback = cancelar

$stmt = $conn->prepare("DELETE FROM teste where id=:?");// O '?' será o primeiro index do array

$id = 4;

$stmt->execute(array($id));

//$conn->rollback();
//$conn->commit();

echo "Dados excluídos com sucesso!";

?>