<?php

//$file = fopen("log.txt", "w+");//espera 2 parâmetros: caminho do arquivo e como você deseja controlar esse arquivo.
// "w" = write / "+" = criar o arquivo novo

$file = fopen("log.txt", "a+");//"a+" = conteúdo vai ser preservado



fwrite($file, date("Y-m-d H:i:s") . "\r\n");//resource e o que eu quero escrever.

fclose($file);//resource

echo "arquivo criado";




?>