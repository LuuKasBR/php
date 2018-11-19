<?php

$images = scandir("images");//vai retornar um array

//var_dump($images);

$data = array();



foreach ($images as $img ) {
	if(!in_array($img, array(".", ".."))){ //se não existir o '.' e '..'
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/dir/" .str_replace("\\", "/", $filename); 

		var_dump($info);

		array_push($data, $info); //insere nesse array
	}

}

//echo json_encode($data);


?>