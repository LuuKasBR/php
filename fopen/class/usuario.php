<?php

class Usuario {

private $id;
private $login;
private $senha;



	public function getId(){
		return $this->id;

}
	public function setId($value){
		$this->id = $value; 		
}

	public function getLogin(){
		return $this->login;

}
	public function setLogin($value){
		$this->login = $value; 		
}

	public function getSenha(){
		return $this->senha;

}
	public function setSenha($value){
		$this->senha = $value; 		
}


	public function loadById($id){
		$sql = new Sql();

		$resultado = $sql->select("SELECT * FROM teste WHERE id = :ID", array(
			":ID"=>$id
		));

		if(count($resultado) > 0) {
			$row = $resultado[0];

			$this->setData($resultado[0]);

		}

	}

	public function insert(){
		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array( //PROCEDURE

			':LOGIN'=>$this->getLogin(),
			':SENHA'=>$this->getSenha()

		));

		if (count($results) > 0){
			$this->setData($results[0]);

		}

	}

	public function setData($data){

		$this->setId($data['id']);
		$this->setLogin($data['login']);
		$this->setSenha($data['senha']);

	}

	public function __toString(){
		return json_encode(array(
			"id"=>$this->getId(),
			"login"=>$this->getLogin(),
			"senha"=>$this->getSenha()
		));
	}

	public function update($login, $password){

		$this->setLogin($login);
		$this->setSenha($password);

		$sql = new Sql();

		$sql->query("UPDATE teste SET login = :LOGIN, senha = :SENHA WHERE id = :ID", array(

			':LOGIN'=>$this->getLogin(),
			':SENHA'=>$this->getSenha(),
			':ID'=>$this->getId()
		));



	}

	public function delete(){

		$sql = new Sql();

		$sql->query("DELETE FROM teste WHERE id = :ID", array(

			':ID'=>$this->getId()
		));

		$this->setId(0);
		$this->setLogin("");
		$this->setSenha("");

	}





	public static function getList(){ //NÃO PRECISO INSTANCIAR ESSE OBJETO, JÁ QUE É STATICO

		$sql = new Sql();

		return $sql->select("SELECT * FROM teste ORDER BY id;");



	}




}

    
?>