<?php
					//host, usuario, senha, base
$conn = new mysqli("localhost","root", "", "php");

if ($conn->connect_error){
		echo "Error: " .$conn->connect_error;

}

$result = $conn->query("SELECT * FROM teste");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){//retorna um dado, enquanto exista um dado no banco
		//var_dump ($row);
		array_push($data, $row);//adiciona os dados ao array 'data'
}

echo json_encode($data);



?>