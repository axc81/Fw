<?php 

class Beranda extends Controller{
	public $a, $b, $c, $r;
	public function index(){
		$data['title'] = 'AN SHOP';
		$data['pro'] = $this->model('Mproduct')->getAllProduct();
		$this->view('vberanda',$data);
	}

	public function detail($id){
		$data['title'] = 'Detail Product';
		$data['pro'] = $this->model('Mproduct')->getProductById($id);
		$this->a = $data['pro']['quantity']; 
 		$this->b = $data['pro']['price'];
 		$data['price'] = $this->b;
 		$data['limit'] = $this->a;
		$this->view('vdetailproduct', $data);
		//var_dump($data['limit']);
	}

	public function cart(){
			$data['pro'] = $this->model('Mproduct')->getProductById($id);
			$this->a = $data['pro']['quantity']; 
 			$this->b = $data['pro']['price'];
 			$data['limit'] = $this->a;




		/////////////////////////////////////////////////////
 		// 	$data['hasil'] = $this->c = $this->a * $this->b;
 		//var_dump($this->c);
		//$this->view('cart/index', $data);
 		//var_dump($data['limit']);
	}
	public function count(){
		//var_dump($_POST);
		
	}

	// public function cart(){
	// 	$data['cart'] = $this->model('Mproduct')->getCart();
	// 	$this->view('cart/index2', $data);
	// }

	// public function countCarts($id){
	// 	$data['cart'] = $this->model('Mproduct')->getCart($id);
	// 	$this->view('cart/index3', $data);
	// }
}

?>