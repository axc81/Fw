<?php 

class App{

	//property menentukan default app dengan access modifier protected
	protected $controller = 'Userguide';		//controller <<kalau mo pakai pagination ganti parent class jadi beranda karena bukan pagination bukan turunan
	protected $method = 'index';		//method
	protected $parameter = []; 			//pada parameter dibuat berdasarkan string data.

	//function construct!
	public function __construct(){
		$url = $this->parseUrl(); //method memanggil function parseUrl
		
		//controller
		if (file_exists(parentRoot . DS . 'app' . DS . 'controllers' . DS . $url[0] . '.php')) {
			$this->controller = $url[0]; 	//menimpa controller baru
			unset($url[0]);					//menghapus controller
		}

		//mengganti controller baru
		require_once parentRoot . DS . 'app' . DS . 'controllers' . DS . $this->controller . '.php'; 
		//var_dump(parentRoot . DS . 'app' . DS . 'controllers' . DS . $this->controller . '.php');
		$this->controller = new $this->controller;

		//method
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//parameter
		if (!empty($url)) {
			$this->parameter = array_values($url);
		}

		//menjalankan controller dan method serta mengirimkan parameter jika ada !
		call_user_func_array([$this->controller, $this->method], $this->parameter);

	}

	//parsing URL atau memecahkan url
	public function parseUrl(){
		if(isset($_GET['url'])){
			//menghapus akhiran '/' pada akhir url
			$url = rtrim($_GET['url'], '/');
			//menghapus character aneh yang tidak diperbolehkan untuk mengakses URl dengan FILTER_SANITIZE_URL
			$url = filter_var($url, FILTER_SANITIZE_URL);
			//memecahkan url dilimiter explode
			$url = explode('/', $url);
			return $url;
		}
	}

}
