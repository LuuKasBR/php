<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);//traz o conteúdo do arquivo

$basename = basename($parse["path"]);//traz só o caminho 

$file = fopen($basename, "w+");

fwrite($file, $content);//criar o arquivo e pegar o conteúdo dela atrávés do $content

fclose($file);


?>


<img src="<?=$basename?>">