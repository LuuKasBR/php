<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){//Criando a rota principal

	echo "Home Page";

});

$app->get('/hello/:name', function ($name) {//Criando outra rota, ficando por exemplo: dominio.com.br/hello/lucas
    echo "Hello, " . $name;
});


$app->run();



?>