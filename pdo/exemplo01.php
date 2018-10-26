<?php

$conn = new PDO("mysql:dbname=php;host=localhost", "root", "");//String de conexão ao banco

$stmt = $conn->prepare("SELECT * FROM teste");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($resultado);

foreach ($resultado as $row) {
	foreach ($row as $key => $value) {
			
		echo "<strong>" .$key. ":</strong>" .$value. "<br>";
	}

	echo "=============================";
}



?>