<?php 

class Register extends Controller{

	public function index(){
		$data['title'] = 'Register';
		$data['product']= $this->model('Mproduct')->getAllProducts();
		$this->view('template/header', $data);
		$this->view('frontend/register', $data);
		$this->view('template/footer', $data);
		/*if ($this->model('Mregis')->cekUser() > 0) {
			echo "so ada";
		}else{
			
		}*/
	}

	public function cekUser(){
		if ($this->model('Mregis')->cekUser($_POST) > 0) {
			# code...
			FLasher::setFlashLogin('GagaL', 'Username Sudah digunakan !');
			$this->back();
		}else if ($this->model('Mregis')->insertUser($_POST) > 0) {
			FLasher::setFlashLogin('Sukses', 'Login Untuk Melanjutkan !');
			$this->back();
		}
	}

}

?>