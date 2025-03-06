<?php 

class Homepage extends Controller{

	public function index(){
		$data['title'] = 'homepage';
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
		$this->view('template/header_homepage', $data);
		$this->view('frontend/index', $data);
		$this->view('template/footer', $data);
		
	}

}

?>