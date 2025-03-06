<?php 

class Muploadproduct{

	private $dbp;

	public function __construct(){
		$this->dbp = new Database;
	}

	public function getAllProduct(){
		$this->dbp->query('SELECT * FROM product');
		return $this->dbp->resultSet();
	}

	public function cekProduct($data){
		$query = "SELECT pCode FROM product WHERE pCode= :pCode";
		$this->dbp->query($query);
		$this->dbp->bind('pCode', $data["pCode"]);
		$this->dbp->execute(array(
			'pCode' => $_POST['pCode']
		));
		return $this->dbp->rowCount();
		return $this->dbp->resultSet();
	}

	public function tambahProduct($data){
		$query = "INSERT INTO product values ('', :pName, :pCode, :pQuantity, :pPrice, :pImage, :pCategory, :pDescription, :pPostedBy, :pDatePosted)";
		$this->dbp->query($query);
		$this->dbp->bind('pImage', $data['pImage']);
		$this->dbp->bind('pName', $data['pName']);
		$this->dbp->bind('pCode', $data['pCode']);
		$this->dbp->bind('pQuantity', $data['pQuantity']);
		$this->dbp->bind('pPrice', $data['pPrice']);			
		$this->dbp->bind('pCategory', $data['pCategory']);
		$this->dbp->bind('pDescription', htmlspecialchars($data['pDescription']));
		$this->dbp->bind('pPostedBy',$data['pPostedBy']);
		$this->dbp->bind('pDatePosted',$data['pDatePosted']);
		$this->dbp->execute();
		return $this->dbp->rowCount();
	}

}

?>