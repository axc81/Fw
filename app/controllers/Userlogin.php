<?php 

class Userlogin extends Controller{

	public function index(){
		$data['title'] = "LOGIN USER";
		$this->view('template/header', $data);
		$this->view('frontend/register', $data);
		$this->view('template/footer', $data);
	}

	public function Userin(){
		if (empty($_POST["uUsername"]) && empty($_POST["uPassword"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username & Password ');
			$this->redirect('userlogin');
		}elseif (empty($_POST["uPassword"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Password ');
			$this->redirect('userlogin');
		}elseif (empty($_POST["uUsername"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username ');
			$this->redirect('Userlogin');
		}elseif ($this->model('Mlogin')->Uservalidation($_POST) > 0){
			$_SESSION['uUsername'] = $_POST["uUsername"];
			$_SESSION["Userlogin"] = true;
			//$data['Userlogin'] = $_SESSION . $_POST["username"];
			$this->redirect('keranjang');
			// echo $_SESSION['username'];
		}else{
			FLasher::setFlashLogin('Gagal', 'Username Dan Password Tidak Cocok !');
			$this->redirect('userlogin');
		}
	}
	public function Userout(){
		session_destroy();
		$this->redirect('beranda');
	}
}

?>
