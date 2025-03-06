<?php 

class Userguide extends Controller{

	public function index(){
		$data['title'] = "Dokumentasi";
		$this->view('userguide/dokumentasi', $data);
	}

	public function struktur_framework(){
		$data['titlesi'] = "Struktur Framework";
		$this->view('userguide/struktur_framework', $data);
	}

	/////**Tutorial END**/////
	public function tutorial(){
		$data['title'] = "Tutorial";
		$this->view('userguide/tutorial', $data);
	}
	/*tutorial instalasi*/
	public function instalasi(){
		$data['title'] = "Instalasi";
		$this->view('userguide/instalasi', $data);
	}
	/*tutorial konfigurasi*/
	public function konfigurasi(){
		$data['title'] = "konfigurasi";
		$this->view('userguide/konfigurasi', $data);
	}

	public function konfig_payment($id){
		$data['title'] = "konfigurasi payment";
		$this->view('userguide/konfigurasi2', $data);
	}

	public function tutorial_controller(){
		$data['title'] = "controller";
		$this->view('userguide/controller', $data);	
	}

	public function tutorial_model(){
		$data['title'] = "model";
		$this->view('userguide/model', $data);
	}

	public function tutorial_view(){
		$data['title'] = "view";
		$this->view('userguide/view', $data);
	}
	/////**Tutorial END**/////


	////**LIBRARIES**////
	public function libraries(){
		$data['title'] = "Libraries";
		$this->view('userguide/libraries', $data);
	}

	public function lib_Controller(){
		$data['title'] = "Libraries_controller";
		$this->view('userguide/libraries/controller', $data);
	}

	public function lib_DatabaseModel(){
		$data['title'] = "Libraries_database_dan_model";
		$this->view('userguide/libraries/database', $data);
	}

	public function lib_flasher(){
		$data['title'] = "Libraries FLasher";
		$this->view('userguide/libraries/flasher', $data);
	}

	public function lib_fpdf(){
		$data['title'] = "Libraries FPDF";
		$this->view('userguide/libraries/vfpdf', $data);
	}

	public function lib_pagination(){
		$data['title'] = "Libraries Pagination";
		$this->view('userguide/libraries/pagination', $data);
	}

	public function lib_upload(){
		$data['title'] = "libraries Upload";
		$this->view('userguide/libraries/upload', $data);
	}

	//**LIBRARIES END**//



}

?>