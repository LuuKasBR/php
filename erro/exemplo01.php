<?php

function error_handler($code, $message, $file, $line){

	echo json_encode(array(

		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	));

}

set_error_handler("error_handler");//espera a função que define os erros EM STRING

echo 100 / 0;



?>