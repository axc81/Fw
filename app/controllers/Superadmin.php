<?php

class Superadmin extends Controller{

	public function index(){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		$data['title'] = 'superadmin';
		$this->view('superadmin/template/header', $data);
		$this->view('superadmin/index');
		$this->view('superadmin/template/footer');

	}

	public function adminList(){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		$data['title'] = 'Tampil Admin';
		$data['admin']= $this->model('MSuperAdmin')->lihatAdmin();
		$this->view('superadmin/template/header', $data);
		$this->view('superadmin/tampiladmin', $data);
		$this->view('superadmin/template/footer');

	}

	public function tambahAdmin(){
		/*check session*/
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		$data['title'] = 'Tambah Admin';
		$this->view('superadmin/template/header', $data);
		$this->view('superadmin/vtambah');
		$this->view('superadmin/template/footer');
		/*check username*/
		if ($this->model('MSuperAdmin')->cekUser($_POST) > 0) {
			echo "<script>alert('username telah digunakan');
				</script>";
			return false;
			$this->back();
		}
		/*post admn to database*/
		if (isset($_POST['submit'])) {
			if ($this->model('MSuperAdmin')->tambahAdmin($_POST) > 0) {
				echo "<script>alert('sukses');
				</script>";
			return false;
			$this->back();
			}else{
				echo "<script>alert('lengkapi form');
				</script>";
			return false;
			$this->back();
			}
		}
		
	}

	public function detail($aId){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		$data['title'] = 'detail admin';
		$data['admin'] = $this->model('MSuperAdmin')->detailAdminById($aId);
		$this->view('superadmin/template/header',$data);
		$this->view('superadmin/detailadmin', $data);
		$this->view('superadmin/template/footer');
	}

	public function delete($aId){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}

		/*delete data id admin in database*/
		if ($this->model('MSuperAdmin')->deleteAdmin($aId) > 0) {
			FLasher::setFlash('berhasil', 'dihapus', 'success');
			$this->redirect('superadmin');
		}else{
			FLasher::setFlash('gagal', 'dihapus', 'danger');
			$this->redirect('superadmin');
		}
	}

	public function edit($aId){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		$data['title'] = 'Edit Admin';
		$data['admin'] = $this->model('MSuperAdmin')->detailAdminById($aId);
		$this->view('superadmin/template/header', $data);
		$this->view('superadmin/vedit',$data);
		$this->view('superadmin/template/footer');
	}

	public function updateAdmin(){
		if ($this->notSession('LoginSuper')) {
			$this->redirect('LoginSuper');
		}
		/*check username*/
		if ($this->model('MSuperAdmin')->cekUser($_POST) > 0) {
			echo "<script>alert('username telah digunakan');
				</script>";
			return false;
			$this->back();
		}
		/*post admn to database*/
		if ($this->model('MSuperAdmin')->updateAdmin($_POST) > 0) {
				echo "<script>alert('Sukses Data Telah Diganti');
				</script>";
			return false;
			$this->redirect('superadmin/detail');
			}else{
				echo "<script>alert('Lengkapi Form');
				</script>";
			$this->redirect('superadmin');
		}
	}

	public function logout(){
		session_destroy();
		$this->redirect('LoginSuper');
	}
}

?>