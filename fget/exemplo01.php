<?php

$filename = "usuarios.csv";

if (file_exists($filename)){

	$file = fopen($filename, "r");//arquivo, 'r' = leitura 

	$headers = explode(",", fgets($file));//pega a primeira linha do arquivo. Explodido por vírgula

	$data = array();

	while ($row = fgets($file)) {// se isso retornou alguma coisa, executa o while.

		$rowData = explode(",", $row);
		$linha = array();
			

		for ($i = 0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];//posição 0 do headers

		}		

		array_push($data, $linha);

	}


	fclose($file);

	echo json_encode($data);


}



?>