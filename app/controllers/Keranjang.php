<?php 

class Keranjang extends Controller{

	public function index(){
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
/*		$data['title'] = 'Keranjang';
		$data['order'] = $this->model('Mkeranjang')->getAllOrder(); 
		$this->view('user/Keranjang', $data);
*/		$this->redirect('Beranda');
	}

	public function by($uid){
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}elseif ($uid !== $_SESSION['uUsername']) {
			$data['title'] = '404'; 
			$this->view('template/header', $data);
			$this->view('error/vError');
			$this->view('template/footer');
			return false;
		}

		$data['title'] = 'Keranjang';
		$data['hitungProduct'] = $this->model('Mproduct')->getUser($uid); //ambil data row record orderan ditampilkan di header
		//$data['user'] = $this->model('Mproduct')->getData($uid); //ambil data
		$data['user'] = $this->model('Mkeranjang')->orderById($uid);
		$data['total'] = $this->model('Mkeranjang')->getTotalHargaOrder($uid);
		$this->view('template/header2', $data);
		$this->view('frontend/vkeranjang', $data);
		$this->view('template/footer', $data);
	}

	public function Add($id){
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
		$data['pro'] = $this->model('Mkeranjang')->addItemById($id);
		$this->view('cart/index2', $data);

	}

	public function postItem(){
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
		else if( $this->model('Mkeranjang')->addOrder($_POST) > 0 ) {
			FLasher::infoSukses();
			$this->back();	
		}else{
			FLasher::infoGagal();
			$this->back();
		}
	}

	public function detailKeranjang($uid){
		if($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
		$data['order'] = $this->model('Mkeranjang')->OrderById($uid);
		$this->view('template/header', $data);
		$this->view('cart/indexx', $data);
		$this->view('template/footer', $data);
	}

	public function checkOut($id){
		if ($this->notSession('Userlogin')) {
			$this->redirect('Userlogin');
		}
		$data['out'] = $this->model('Mkeranjang')->CheckById($id);
		/*$this->view('template/header', $data);
		$this->view('cart/indexx', $data);
		$this->view('template/footer', $data);*/
	}

	public function delete($opId){
		if ( $this->model('Mkeranjang')->hapusDataOrderProduct($opId) > 0 ) {
			FLasher::setFlash('berhasil', 'dihapus', 'success');
			$this->back();
		}else{
			FLasher::setFlash('gagal', 'dihapus', 'danger');
			$this->back();
		}
	}

	public function payment(){
		$this->view('frontend/vkeranjang2');
	}

}

?>

