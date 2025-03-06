<?php 

class Mregis{

	private $db;
	private $dbx;

	public function __construct(){
		$this->db = new Database;
		$this->dbx = new Database;
	}

	public function insertUser($data){
		$query = "INSERT INTO user VALUES ('', :uFirstName, :uLastName, :uAddress, :uCity, :uUsername, :uPassword, :uPhone)";
		$this->db->query($query);
		$this->db->bind('uFirstName', $data["uFirstName"]);
		$this->db->bind('uLastName', $data["uLastName"]);
		$this->db->bind('uAddress', $data["uAddress"]);
		$this->db->bind('uCity', $data["uCity"]);
		$this->db->bind('uUsername', $data["uUsername"]);
		$this->db->bind('uPassword', md5($data["uPassword"]));
		$this->db->bind('uPhone', $data["uPhone"]);
		$this->db->execute(array(
			'uFirstName' => $_POST["uFirstName"],
			'uLastName' => $_POST["uLastName"],
			'uAddress' => $_POST["uAddress"],
			'uCity' => $_POST["uCity"],
			'uUsername' => $_POST["uUsername"],
			'uPassword' => $_POST["uPassword"],
			'uPhone' => $_POST["uPhone"]
		));
		return $this->db->rowCount();
	}

	public function cekUSer($data){
		$query = "SELECT uUsername FROM user WHERE uUsername= :uUsername";
		$this->dbx->query($query);
		$this->dbx->bind('uUsername', $data["uUsername"]);
		$this->dbx->execute(array(
			'uUsername' => $_POST["uUsername"]
		));
		return $this->dbx->rowCount();
		return $this->dbx->resultSet();	
	}


}

?>