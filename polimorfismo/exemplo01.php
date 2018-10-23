<?php

abstract class Animal{

	public function falar(){
		return "Som";

	}
	public function mover(){
		return "Anda";

	}

}

class Cachorro extends Animal{

	public function falar(){//Mudou o comportamento do método da classe abstrata
		return "Late";

	}

}

class Gato extends Animal{

	public function falar(){//Mudou o comportamento do método da classe abstrata
		return "Mia";

	}

}



$pluto = new Cachorro();
$garfield = new Gato();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "-------------------- <br>";
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

?>