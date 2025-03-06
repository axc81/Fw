<?php 

class Controller {

	//memanggil method view
	public function view($view, $data = [ ]){
		require_once parentRoot . DS . 'app' . DS . 'views' . DS . $view . '.php'; 
	}

	//memanggil method model
	public function model($model){
		require_once parentRoot . DS . 'app' . DS . 'models' . DS . $model . '.php'; 
		return new $model; //instiansi class
	}

	//membuat method redirect
	public function redirect($redirect){
		header('Location: ' . BASE_URL . '/' . $redirect); //fungsi redirect dari PDO
		exit;
		return new $redirect;
	}

	public function session($val){
		if (isset($_SESSION[$val])) {
			return TRUE;
	  	}
	}

	public function notSession($val){
		if (!isset($_SESSION[$val])) {
			return TRUE;
	  	}
	}

	public function back() {
        echo '<script>history.go(-1);</script>';
    }

}

