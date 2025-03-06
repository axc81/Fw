<?php 

class Mproduct{
	private $db;
	public $offset;
	public $limit;

	public function __construct(){
		$this->db = new Database;
		
	}

	public function getAllProduct(){
		$this->limit = 2;
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0;
		$this->db->query("SELECT * FROM product");
		//DEBUGGING#ROW_COUNT
		$this->db->resultSet();
		// var_dump($this->db->rowCount());


		$pagConfig = array(
		    'baseURL' => BASE_URL,
		    'totalRows'=>$this->db->rowCount(),
		    'perPage'=>$this->limit
		);
		$pagination = new Pagination($pagConfig);
		// end DEBUGGING#ROW_COUNT
		//return $this->db->resultSet();
		//////////////////////////////
		// $pagConfig = new Pagination();
		// $pagConfig = array(
		//     'baseURL' => $baseURL,
		//     'totalRows'=>$rowCount,
		//     'perPage'=>$limit
		// );
		
		$this->db->query("SELECT * FROM product ORDER BY id DESC LIMIT $this->offset,$this->limit");
		// if ($query->num_rows > 0) {
		// 	while ($row = $this->db->resultSet()) {
		// 		# code...
		// 	}
		// }
		echo $pagination->createLinks();
		return $this->db->resultSet();


	}

	public function getProductById($id){
		$this->db->query('SELECT * FROM product where id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}


}

?>
