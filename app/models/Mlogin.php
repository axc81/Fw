<?php 

class Mlogin{

	public function __construct(){
		$this->dbL = new Database;
		$this->dbU = new Database;
	}

	public function getUser(){
		$this->dbL->query('SELECT * FROM Admin');		
		return $this->dbL->resultSet();
	}

	public function validation($data){
		$query = "SELECT * FROM admin WHERE aUsername= :aUsername and aPassword= :aPassword";
		$this->dbL->query($query);
		$this->dbL->bind('aUsername', $data["aUsername"]);
		$this->dbL->bind('aPassword', md5($data["aPassword"]));
		$this->dbL->execute(array(
			'aUsername' => $_POST["aUsername"],
			'aPassword' => $_POST["aPassword"]
		));
		return $this->dbL->rowCount();
		return $this->dbL->resultSet();
	}

	public function showsUser(){
		$this->dbU->query("SELECT * FROM user");
		return $this->dbU->resultSet();
	}

	public function Uservalidation($data){
		$query = "SELECT * FROM user WHERE uUsername= :uUsername and uPassword= :uPassword";
		$this->dbU->query($query);
		$this->dbU->bind('uUsername', $data["uUsername"]);
		$this->dbU->bind('uPassword', md5($data["uPassword"]));
		$this->dbU->execute(array(
			'uUsername' => $_POST["uUsername"],
			'uPassowrd' => $_POST["uPassword"]
		));
		return $this->dbU->rowCount();
		return $this->dbU->resultSet();
	}
}

?>