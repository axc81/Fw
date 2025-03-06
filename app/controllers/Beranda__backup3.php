<?php 

class Beranda extends Controller{
	
	public function index(){
		$data['title'] = 'CoffeLab';
		/*modeling data*/
		$this->limit = 2;
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0;
		$data['product'] = $this->model('Mproduct')->getAllProducts();
		$pagConfig = array(
			'baseURL' => BASE_URL,
			'totalRows' => $data['product'][0],/*data['product'][0]  artinya mengambil banyaknya nilai pada row record database*/
			'perPage' => $this->limit
		);
		$data['product']= $this->model('Mproduct')->getPagin($this->limit, $this->offset);
		/*end modeling data*/

		/*start set pagination */
		$pagination = new Pagination($pagConfig);
		$data['pagination'] = $pagination->createLinks();
		/*end pagination class*/
		
		$this->view('template/header', $data);
		$this->view('frontend/index', $data);
		$this->view('template/footer', $data);
		
	}

	// public function kategori($category){
	// 	$data['title'] = 'kategori';
	// 	$this->limitCat = 2;
	// 	$this->offsetCat = !empty($_GET['page'])?(($_GET['page']-1)*$this->limitCat):0;
	// 	$data['category'] = $this->model('Mproduct')->getByCategory();
	// 	$pagConfig = array(
	// 		'baseURL' => BASE_URL . '/beranda/category/',
	// 		'totalRows' => $data['category'][0],
	// 		'perPage' => $this->limitCat
	// 	);
	// 	$data['category'] = $this->model('Mproduct')->getPaginByCategory($this->limitCat, $this->offsetCat);

	// 	$paginationCat = new Pagination($pagConfig);
	// 	$data['paginationCat'] = $paginationCat->createLinks();

	// 	$this->view('template/header', $data);
	// 	$this->view('frontend/kategori', $data);
	// 	$this->view('template/footer', $data);
	// }

	public function detail($id){
		$data['title'] = 'Detail Product';
		$data['pro'] = $this->model('Mproduct')->getProductById($id);
		$this->view('template/header', $data);
		$this->view('frontend/detail', $data);
		$this->view('template/footer', $data);
		//var_dump($data['limit']);
	}


	/*public function showRow(){
		$data = $this->model('Mproduct')->rowCounts();
		echo $data[0];
	}*/
}

?>