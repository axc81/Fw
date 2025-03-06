<?php 

class Mkeranjang {

	private $db;
	private $dbo;
	private $dbc;

	public function __construct(){
		$this->db = new Database;
		$this->dbo = new Database;
		$this->dbc = new Database;
	}


	public function getAllOrder(){
		/*$this->db->query("SELECT * FROM orderproduct JOIN product on orderproduct.pid=product.id JOIN user on orderproduct.uid=user.username");*/
		$this->db->query("SELECT * FROM order_product");
		$this->db->execute();
		return $this->db->resultSet();
	}


	public function addOrder($data){
		/*
		pid = product id
		uid = username id (session user yg login)
		*/
		$query = "INSERT INTO order_product VALUES ('', :uId, :pId, :quantityToOrder, :total)";
		$this->db->query($query);
		$this->db->bind('uId', $data['uId']);
		$this->db->bind('pId', $data['pId']);
		$this->db->bind('quantityToOrder', $data['quantityToOrder']);
		$this->db->bind('total', $data['total']);
		$this->db->execute(array(
			'uId' => $_POST["uId"],
			'pId' => $_POST["pId"],
			'quantityToOrder' => $_POST["quantityToOrder"],
			'total' => $_POST["total"]
		));
		return $this->db->rowCount();
	}

	public function addItemById($id){
		$this->db->query('SELECT * FROM product WHERE id= :id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function orderById($uid){
		/*
		uid adalah = username session yang login karena username diset menjadi primary key
		*/
		$this->dbo->query('SELECT * FROM order_product join product on order_product.pId=product.pId where uId= :uid');
		$this->dbo->bind('uid', $uid);
		$this->dbo->execute();
		return $this->dbo->resultSet();
	}

	public function CheckById($id){
		/*$this->db->query("SELECT * FROM orderproduct JOIN product on orderproduct.pid=product.id JOIN user on orderproduct.uid=user.username");*/
		$this->dbc->query("SELECT * FROM product JOIN orderproduct on product.id=orderproduct.pid where id= :id");
		$this->dbc->bind('id', $id);
		$this->dbc->execute();
		return $this->dbc->resultSet();
	}
 	

 	public function getLaporan(){
 		$this->db->query("SELECT * FROM order_product");
 		return $this->db->resultSet();
 	}

 	public function getTotalHargaOrder($uid){
 		/*$this->dbo->query('SELECT SUM(total) FROM order_product where uId= :uid');
 		$this->dbo->bind('uid', $uid);
 		$this->dbo->execute();
		return $this->dbo->resultSet();*/
		$query = "SELECT SUM(total) as hitung FROM order_product where uId= :uid";
		$this->db->query($query);
		$this->db->bind('uid', $uid);
 		$this->db->execute();
		return $this->db->resultSet();

 	}

 	public function hapusDataOrderProduct($opId){
 		$query = "DELETE FROM order_product WHERE opId = :opId";
		$this->db->query($query);
		$this->db->bind('opId', $opId);
		$this->db->execute();
		return $this->db->rowCount();
 	}
 	

}

?>


