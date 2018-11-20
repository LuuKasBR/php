<?php

$cep = "01001000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);//chamando o curl

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// 1 parametro - a chamada do curl no código/ 2 parametro - defino que eu espero um retorno/ 3 parametro - true 

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//  CURLOPT_SSL_VERIFYPEER - valida se o acesso é feito por https. como o value está como 0, ele não vai fazer essa verificação

$response = curl_exec($ch);//dispara o acesso à essa URL

curl_close($ch);//encerra a conexão


$data = json_decode($response, true);

print_r($data);

?>