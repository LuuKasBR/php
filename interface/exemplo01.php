<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo {//Essa classe deve interpretar a Veiculo

	public function acelerar($velocidade){
		echo "O valor acelerou até " . $velocidade . " km/h";

	}

	public function freiar($velocidade){
		echo "O veículo frenou até " . $velocidade . " km/h";		
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha;		
	}

}


$carro = new Civic();

$carro->trocarMarcha(1);//passando o valor no parâmetro (OBRIGATÓRIO NESSE CENÁRIO).

?>