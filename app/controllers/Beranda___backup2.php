<?php 

class Beranda extends Controller{

	public function __construct(){
		$this->db = new Database;
		$this->pagination = new Pagination;
		
	}
	
	public function index(){
		$data['title'] = 'AN SHOP';
		
		$data= $this->model('Mproduct')->getAllProduct();
		// echo $pagination->createLinks();
		$this->view('vberanda',$data);
		
	}

	public function detail($id){
		$data['title'] = 'Detail Product';
		$data['pro'] = $this->model('Mproduct')->getProductById($id);
		$this->view('vdetailproduct', $data);
		//var_dump($data['limit']);
	}

	public function cart($id){
		if (isset($_GET['id']) && !isset($_POST['update'])) {
			# code...
			$data = $this->model('Mproduct')->getProductById($id);
		}
	}
}

?>