<?php 

class Search extends Controller{

	public function index(){
		$this->redirect('Beranda');
	}

	public function product(){
		$data['title'] = 'Search';
		if (isset($_POST['cari'])) {
			$cari = $_POST['cari'];
			$data['cari'] = $this->model('Mproduct')->cariProduct($cari);
		}
		$this->view('template/header', $data);
		$this->view('frontend/vBySearch', $data);
		$this->view('template/footer', $data);
	}

}

?>