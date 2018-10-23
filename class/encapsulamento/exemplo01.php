<?php

class Pessoa{

	public $nome = "Lucas Souza";
	protected $idade = 20;//Só é acessível dentro da própria classe, ou quem herda dessa classe.
	private $senha = "123456";//Só é acessível dentro da mesma classe.

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

class Programador extends Pessoa{//classe estendida/herança


}



$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();



?>