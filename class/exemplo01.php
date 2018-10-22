<?php

//Classe
class Pessoa {
	//Atributo
	public $nome;

	//Método
	public function falar(){
		return "O meu nome é ".$this->nome;

	}


}

//Instanciando a classe
$lucas = new Pessoa();
$lucas->nome = "Lucas Souza";

echo $lucas->falar();

?>