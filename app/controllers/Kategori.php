<?php 

class Kategori extends Controller
{
	
	public function index(){
		$this->redirect('beranda');
	}
	
	public function katLoc($local){
		$data['title'] = 'kategori/local';
		$data['title_kategori'] = 'local';

		/*modeling data*/
		$this->local = 'local';
		$this->limit = 3; //jumlah data perhalaman
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0; //halaman aktf
		$data['local'] = $this->model('Mproduct')-> getByCategoryLocal($local);
		$pagConfig = array(
			'baseURL' =>'http://localhost/coffeelab/public/kategori/katLoc/local',
			'totalRows' => $data['local'][0],/*data['product'][0]  artinya mengambil banyaknya nilai pada row record database*/
			'perPage' => $this->limit
		);
		/*end modeling data*/
		$data['show'] = $data['local'][0]; //menyimpan banyak data local pada category dalam sebuah array agar nanti tidak tertimpa
		
		/*start set pagination */
		$paginationCat = new Pagination($pagConfig);
		$data['paginationCat'] = $paginationCat->createLinks();
		$data['local']= $this->model('Mproduct')->getPaginByCategory($this->local, $this->limit, $this->offset);
		$this->view('template/header', $data);
		$this->view('frontend/kategoriLocal', $data);
		$this->view('template/footer', $data);
	}

	public function katInt($international){
		$data['title'] = 'kategori/international';
		$data['title_kategori'] = 'international';

		$this->international = 'international';
		$this->limit = 3;
		$this->offset = !empty($_GET['page'])?(($_GET['page']-1)*$this->limit):0; //halaman aktf
		$data['international'] = $this->model('Mproduct')->getByCategoryInternational($international);
		$pagConfig = array(
			'baseURL' => 'http://localhost/coffeelab/public/kategori/katInt/international',
			'perPage' => $this->limit
		);
		$data['show']  = $data['international'][0];
		/*start set pagination */
		$paginationCats = new Pagination($pagConfig);
		$data['paginationCats'] = $paginationCats->createLinks();
		$data['international']= $this->model('Mproduct')->getPaginByCategoryInt($this->international, $this->limit, $this->offset);
		$this->view('template/header', $data);
		$this->view('frontend/kategoriInternational', $data);
		$this->view('template/footer', $data);
	}	


}

?>