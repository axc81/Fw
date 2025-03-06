<?php 

class LoginAdmin extends Controller{

	public function index(){
		$data['title'] = 'Login Dashboard';
		$this->view('auth/index', $data);	
		// $this->val->blank(1);
	}

	public function check(){
		if (empty($_POST["aUsername"]) && empty($_POST["aPassword"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username & Password ');
			$this->redirect('LoginAdmin');
		}elseif (empty($_POST["aPassword"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Password ');
			$this->redirect('LoginAdmin');
		}elseif (empty($_POST["aUsername"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username ');
			$this->redirect('LoginAdmin');
		}elseif ($this->model('Mlogin')->validation($_POST) > 0){
			$_SESSION['aUsername'] = $_POST["aUsername"];
			$_SESSION["LoginAdmin"] = true;
			//$data['loginAdmin'] = $_SESSION . $_POST["username"];
			$this->redirect('Dashboard');
			// echo $_SESSION['username'];
		}else{
			FLasher::setFlashLogin('Gagal', 'Username Dan Password Tidak Cocok !');
			$this->redirect('LoginAdmin');
		}
	}

	public function logout(){
		session_destroy();
		$this->redirect('LoginAdmin');
	}
}