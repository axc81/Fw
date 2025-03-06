<?php 

class Beranda extends Controller{
	
	public function index(){
		$data['title'] = 'CoffeLab';

		/*modeling data*/
		$this->limit = 1; //jumlah data perhalaman
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0; //halaman aktf
		$data['product'] = $this->model('Mproduct')->getAllProducts();
		$pagConfig = array(
			'baseURL' =>BASE_URL .'/beranda',
			'totalRows' => $data['product'][0],/*data['product'][0]  artinya mengambil banyaknya nilai pada row record database*/
			'perPage' => $this->limit
		);
		/*end modeling data*/

		/*start set pagination */
		$pagination = new Pagination($pagConfig);
		$data['pagination'] = $pagination->createLinks();
		$data['product']= $this->model('Mproduct')->getPagin($this->limit, $this->offset);

		/*end pagination class*/
        /*$query_string_sep = (strpos(BASE_URL, '?') === FALSE) ? '/?page=' : '&amp;page=';
        var_dump($query_string_sep);*/
		
		$this->view('template/header', $data);
		$this->view('frontend/index', $data);
		$this->view('template/footer', $data);
		
	}

	public function kategoriComputer($computer){
		$data['title'] = 'kategori/local';
		/*modeling data*/
		$this->limit = 1; //jumlah data perhalaman
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0; //halaman aktf
		$data['computer'] = $this->model('Mproduct')-> getByCategoryComputer($computer);
		$pagConfig = array(
			'baseURL' =>BASE_URL .'/kategoriComputer',
			'totalRows' => $data['computer'][0],/*data['product'][0]  artinya mengambil banyaknya nilai pada row record database*/
			'perPage' => $this->limit
		);
		/*end modeling data*/
		$data['show'] = $data['computer'][0]; //menyimpan banyak data computer pada category dalam sebuah array agar nanti tidak tertimpa
		
		/*start set pagination */
		$paginationCat = new Pagination($pagConfig);
		$data['paginationCat'] = $paginationCat->createLinks();
		$data['computer']= $this->model('Mproduct')->getPaginByCategory($this->limit, $this->offset);
		$this->view('template/header', $data);
		$this->view('frontend/kategori', $data);
		$this->view('template/footer', $data);
	}

	public function kategoriInternational($international){
		/*$data['title'] = 'kategori/international';
		$this->limit = 1;
		$this->offset = !empty($_GET['page']) ? (($_GET['page'])-1)*$this->limit):0;
		$data['international'] = $this->model('Mproduct')->getByCategoryInternational($international);
		$pagConfig = array(
				'baseURL' => 'http://localhost/coffeelab/public/beranda/';
		);*/
	}	


	public function detail($id){
		$data['title'] = 'Detail Product';
		$data['pro'] = $this->model('Mproduct')->getProductById($id);
		$this->view('template/header', $data);
		$this->view('frontend/detail', $data);
		$this->view('template/footer', $data);
		//var_dump($data['limit']);
	}

}

?>