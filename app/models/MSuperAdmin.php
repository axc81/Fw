<?php 

class MSuperAdmin{

	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function validation($data){
		$query = "SELECT * FROM superadmin WHERE username= :username and password= :password";
		$this->db->query($query);
		$this->db->bind('username', $data["username"]);
		$this->db->bind('password', md5($data["password"]));
		$this->db->execute(array(
			'username' => $_POST["username"],
			'passowrd' => $_POST["password"]
		));
		return $this->db->rowCount();
		return $this->db->resultSet();	
	}

	public function lihatAdmin(){
		$this->db->query('SELECT * FROM admin');		
		return $this->db->resultSet();
	}

	public function tambahAdmin($data){
/*		$adminPhoto = new Upload();
			$aPhoto = $adminPhoto->uploadGambar([
				$adminPhoto->namaFile = $_FILES['aPhoto']['name'],
				$adminPhoto->ukuranFile = $_FILES['aPhoto']['size'],
				$adminPhoto->error = $_FILES['aPhoto']['error'],
				$adminPhoto->tmpName = $_FILES['aPhoto']['tmp_name']
			]); 
			if (!$aPhoto) {
				return false;
			}*/

		$query = "INSERT INTO admin VALUES ('', :aFirstName, :aLastName, :aJk, :aPhoto, :aTglLahir, :aAddress, :aCity, :aState, :aUsername, :aPassword, :aPhone)";
		$this->db->query($query);
		$this->db->bind('aFirstName', $data['aFirstName']);
		$this->db->bind('aLastName', $data['aLastName']);
		$this->db->bind('aJk', $data['aJk']);
		$this->db->bind('aPhoto', $aPhoto);
		$this->db->bind('aTglLahir', $data['aTglLahir']);
		$this->db->bind('aAddress', $data['aAddress']);
		$this->db->bind('aCity', $data['aCity']);
		$this->db->bind('aState', $data['aState']);
		$this->db->bind('aUsername', $data['aUsername']);
		$this->db->bind('aPassword', md5($data['aPassword']));
		$this->db->bind('aPhone', $data['aPhone']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function updateAdmin($data){
		$adminPhoto = new Upload();
			$aPhoto = $adminPhoto->uploadGambar([
				$adminPhoto->namaFile = $_FILES['aPhoto']['name'],
				$adminPhoto->ukuranFile = $_FILES['aPhoto']['size'],
				$adminPhoto->error = $_FILES['aPhoto']['error'],
				$adminPhoto->tmpName = $_FILES['aPhoto']['tmp_name']
			]); 
			if (!$aPhoto) {
				return false;
			}

		$query = "UPDATE admin SET aFirstName=:aFirstName, aLastName=:aLastName, aJk=:aJk, aPhoto=:aPhoto, aTglLahir=:aTglLahir, aAddress=:aAddress, aCity=:aCity, aState=:aState, aUsername=:aUsername, aPassword= :aPassword, aPhone=:aPhone where aId = :aId";

		$this->db->query($query);
		$this->db->bind('aFirstName', $data['aFirstName']);
		$this->db->bind('aLastName', $data['aLastName']);
		$this->db->bind('aJk', $data['aJk']);
		$this->db->bind('aPhoto', $aPhoto);
		$this->db->bind('aTglLahir', $data['aTglLahir']);
		$this->db->bind('aAddress', $data['aAddress']);
		$this->db->bind('aCity', $data['aCity']);
		$this->db->bind('aState', $data['aState']);
		$this->db->bind('aUsername', $data['aUsername']);
		$this->db->bind('aPassword', md5($data['aPassword']));
		$this->db->bind('aPhone', $data['aPhone']);
		$this->db->bind('aId', $data['aId']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function deleteAdmin($aId){
		$query = "DELETE FROM admin WHERE aId = :aId";
		$this->db->query($query);
		$this->db->bind('aId', $aId);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function detailAdminById($aId){
		$this->db->query('SELECT * FROM admin WHERE aId=:aId'); 
		$this->db->bind('aId', $aId); 
		return $this->db->single();
	}


	public function cekUSer($data){
		$query = "SELECT aUsername FROM admin WHERE aUsername= :aUsername";
		$this->db->query($query);
		$this->db->bind('aUsername', $data["aUsername"]);
		$this->db->execute(array(
			'aUsername' => $_POST["aUsername"]
		));
		return $this->db->rowCount();
		return $this->db->resultSet();	
	}

}

?>