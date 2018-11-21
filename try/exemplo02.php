<?php

function trataNome($name){

	if (!$name){

		throw new Exception("Nenhum nome foi informado", 500);
		

	}

	echo $name;

}



try {

	trataNome("Lucas");
	trataNome("");

} catch (Exception $e){

	echo $e->getMessage();

} finally {//opcional

	echo "Executou o bloco Try.";

}

?>