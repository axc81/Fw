 <?php 

class Mproduct{
	private $db;
	private $dbo;

	public function __construct(){
		$this->db = new Database;		
		$this->dbo = new DAtabase;
	}

	public function getAllProducts(){
		$query = "SELECT count(*) from product";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->hitung();
	}

	public function getPagin($limit, $offset){
		$this->db->query("SELECT * FROM product ORDER BY pId ASC LIMIT $offset, $limit");
		return $this->db->resultSet();
	}

	public function getKeranjang(){
		$this->db->query("SELECT * FROM product");
		return $this->db->resultSet();
	}

	public function getProductById($pId){
		$this->db->query('SELECT * FROM product where pId=:pId');
		$this->db->bind('pId', $pId);
		return $this->db->single();
	}

	public function getByCategoryLocal($local){
		/*$this->db->query('SELECT * FROM product where category LIKE :computer');*/
		$query = "SELECT count(*) from product where pCategory LIKE :local";
		$this->db->query($query);
		$this->db->bind('local', "%$local%");
		$this->db->execute();
		return $this->db->hitung();

	}

	public function getByCategoryInternational($international){
		/*$this->db->query('SELECT * FROM product where category LIKE :computer');*/
		$query = "SELECT count(*) from product where pCategory LIKE :international";
		$this->db->query($query);
		$this->db->bind('international', "%$international%");
		$this->db->execute();
		return $this->db->hitung();

	}

	public function getPaginByCategory($local, $limit, $offset){
		$this->db->query("SELECT * FROM product where pCategory LIKE :local ORDER BY pName ASC LIMIT $offset, $limit");
		$this->db->bind('local', "%$local");
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function getPaginByCategoryInt($international, $limit, $offset){
		$this->db->query("SELECT * FROM product where pCategory LIKE :international ORDER BY pName ASC LIMIT $offset, $limit");
		$this->db->bind('international', "%$international%");
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function cariProduct($cari){
		$this->db->query("SELECT * FROM product where pName LIKE :cari or pPrice LIKE :cari");
		$this->db->bind('cari', "%$cari%");
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function getUser($uid){
		$query = "SELECT count(*) from order_product where uId LIKE :uid";
		$this->dbo->query($query);
		$this->dbo->bind('uid', "%$uid%");
		$this->dbo->execute();
		return $this->dbo->hitung();
	}

	public function getData($uid){
		$query = "SELECT * FROM order_product where uId LIKE :uid";
		$this->db->query($query);
		$this->db->bind('uid', "%$uid%");
		$this->db->execute();
		return $this->db->resultSet();
	}

}

?>
