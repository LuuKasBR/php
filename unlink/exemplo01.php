<?php

$filename = fopen("teste.txt", "w+"); // arquivo, abrir o arquivo

fclose($filename);

unlink("teste.txt"); //deletar o arquivo

echo "Arquivo removido com êxito";


?>