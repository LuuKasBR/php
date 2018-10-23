<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {//Essa classe deve interpretar a Veiculo, no entanto, ninguém pode instanciar o Automovel diretamente.

	public function acelerar($velocidade){
		echo "O veículo acelerou até " . $velocidade . " km/h";

	}

	public function freiar($velocidade){
		echo "O veículo frenou até " . $velocidade . " km/h";		
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha;		
	}

}

class DelRey extends Automovel {

	public function empurrar(){


	}


}

//$carro = new DelRey();//CORRETO
//$carro = new Automovel();//INCORRETO. Não é possível instanciar uma classe abstrata.


$carro->acelerar(200);

?>

