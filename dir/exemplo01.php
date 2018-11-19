<?php

$name = "images";

if (!is_dir($name)){//se não existir
	mkdir($name); //cria o diretório
	echo "Diretório " .$name. " criado com sucesso";

}else{

	rmdir($name);//exclui o diretório
	echo "Diretório já existe: $name";
}



?>