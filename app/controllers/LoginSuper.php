<?php 

class LoginSuper extends Controller{

	public function index(){
		$data['title'] = 'Login Superadmin';
		$this->view('Superadmin/Login', $data);	
	}

	public function check(){
		if (empty($_POST["username"]) && empty($_POST["password"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username & Password ');
			$this->redirect('LoginSuper');
		}elseif (empty($_POST["password"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Password ');
			$this->redirect('LoginSuper');
		}elseif (empty($_POST["username"])) {
			FLasher::setFlashLogin('GagaL', 'Masukan Username ');
			$this->redirect('LoginSuper');
		}elseif ($this->model('MSuperAdmin')->validation($_POST) > 0){
			$_SESSION['username'] = $_POST["username"];
			$_SESSION["LoginSuper"] = true;
			//$data['loginSuper'] = $_SESSION . $_POST["username"];
			$this->redirect('Superadmin');
			// echo $_SESSION['username'];
		}else{
			FLasher::setFlashLogin('Gagal', 'Username Dan Password Tidak Cocok !');
			$this->redirect('LoginSuper');
		}
	}

	public function logout(){
		session_destroy();
		$this->redirect('LoginSuper');
	}
}

?>