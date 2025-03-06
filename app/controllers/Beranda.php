<?php 

class Beranda extends Controller{
	
	public function index(){
		$data['title'] = 'CoffeLab';
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
		/*modeling data*/
		$this->limit = 3; //jumlah data perhalaman
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
		
		$this->view('template/header', $data);
		$this->view('frontend/index', $data);
		$this->view('template/footer', $data);
		
	}

	public function kategoriLocal($local){
		$data['title'] = 'kategori/local';
		/*modeling data*/
		$this->limit = 1; //jumlah data perhalaman
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0; //halaman aktf
		$data['local'] = $this->model('Mproduct')-> getByCategoryLocal($local);
		$pagConfig = array(
			'baseURL' =>BASE_URL .'/kategorilocal',
			'totalRows' => $data['local'][0],/*data['product'][0]  artinya mengambil banyaknya nilai pada row record database*/
			'perPage' => $this->limit
		);
		/*end modeling data*/
		$data['show'] = $data['local'][0]; //menyimpan banyak data local pada category dalam sebuah array agar nanti tidak tertimpa
		
		/*start set pagination */
		$paginationCat = new Pagination($pagConfig);
		$data['paginationCat'] = $paginationCat->createLinks();
		$data['local']= $this->model('Mproduct')->getPaginByCategory($this->limit, $this->offset);
		$this->view('template/header', $data);
		$this->view('frontend/kategori', $data);
		$this->view('template/footer', $data);
	}

	public function detail($pId){
		$data['title'] = 'Detail Product';
		$data['pro'] = $this->model('Mproduct')->getProductById($pId);
		$this->view('template/header', $data);
		$this->view('frontend/detail', $data);
		$this->view('template/footer', $data);
		//var_dump($data['limit']);
	}

}

?>