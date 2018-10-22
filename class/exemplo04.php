<?php

class Endereco {


	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){//método construtor, ou seja, vai ser executado assim que a classe for instanciada

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){
			var_dump("DESTRUIR");

	}

	public function __toString(){//Serializa as Strings

		return $this->logradouro.", " .$this->numero. " . " .$this->cidade;

	}

}

$newEndereco = new Endereco("Rua Didi Pacheco","250","Guaíba");//Passando o valor dos atributos no objeto 

//var_dump($newEndereco);

//unset($newEndereco);

echo $newEndereco;

?>