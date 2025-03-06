<?php

class Dashboard extends Controller{

	public function index(){
		if ($this->notSession('LoginAdmin')) {
			$this->redirect('LoginAdmin');
		}
		$data['title'] = 'Dashboard_CoffeeLab';
		$this->view('dashboard/template/header', $data);
		$this->view('dashboard/index');
		$this->view('dashboard/template/footer');
	}

	public function tambahProduct(){
		if ($this->notSession('LoginAdmin')) {
			$this->redirect('LoginAdmin');
		}
		$data['title'] = 'Tambah Product';
		$this->view('dashboard/template/header', $data);
		$this->view('dashboard/vtambah');
		$this->view('dashboard/template/footer');
		/*cek user*/
		if ($this->model('Muploadproduct')->cekProduct($_POST) > 0) {
			echo "<script>alert('Code Barang sudah ada');</script>";
		}
		return false;
		$this->back();
		/*tambah dataa ke product*/
		if (isset($_POST['submit'])) {
			$test = new Upload();
			$pImage = $test->uploadGambar([
				$test->namaFile = $_FILES['pImage']['name'],
				$test->ukuranFile = $_FILES['pImage']['size'],
				$test->error = $_FILES['pImage']['error'],
				$test->tmpName = $_FILES['pImage']['tmp_name']
			]);
			if (!$pImage) {
		 		return false;
			}
			$_POST['pImage'] = $pImage;
			$this->model('Muploadproduct')->tambahProduct($_POST);	
		}
	}//

	public function viewProduct(){
		if ($this->notSession('LoginAdmin')) {
			$this->redirect('LoginAdmin');
		}
		$data['title'] = ' View Product';
		$this->view('dashboard/template/header', $data);
		$this->view('dashboard/vproduct');
		$this->view('dashboard/template/footer');
	}
}
