<?php

class Documento{

	private $numero;


	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}

}

class Cpf extends Documento {

	public function validaCpf():bool{
		return true;

	}



}

$doc = new Cpf();//Instanciando a classe filho

$doc->setNumero("04912064025");

var_dump($doc->validaCpf());

echo "<br>";

echo $doc->getNumero();


?>