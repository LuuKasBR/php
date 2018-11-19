<?php

$filename = "coala.jpg";

$base64 = base64_encode(file_get_contents($filename));//lê o conteúdo completo do arquivo e converte para base64

$fileinfo = new finfo(FILEINFO_MIME_TYPE);//pegar o MIME do arquivo

$mimetype = $fileinfo->file($filename);


$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para a imagem</a>

<img src="<?=$base64encode?>"</img>