<?php

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {//scaneia o diretório
	
	if (!in_array($item, array(".", ".."))){//remove o '.' e '..' da exclusão/array

		unlink("images/" . $item);


	}


}

echo "OK";


?>