<?php 

class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASSWORD;
	private $dbn = DB_NAME;

	private $dbh; //Database Handler
	private $stmt; //statament


	public function __construct(){
		//$dsn = data source name default PHP
		//$dsn = "mysql:host='localhost'; dbn='root', ;root', '';
		$dsn = 'mysql:host='. $this->host .';dbname='. $this->dbn;

		$option = [
			PDO::ATTR_PERSISTENT => TRUE, //membuat database tetap terjaga
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch (true) {
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR; 
			}
		}
		//bind atau pengecekan tipe data yang masuk pada method bind untuk membersihkan character dan mendeteksi sehingga data aman dari sql injection.
		$this->stmt->bindValue($param, htmlspecialchars($value, $type)); 
	}

	//method untuk mengeksekusi
	public function execute(){
		$this->stmt->execute();
	}

	//method mengambil seluruh record data pada database
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	//method mengambil satu record data pada database
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	//method menghitung row atau record database yang berubah di database (berubah, dihapus, diedit, ditambah, dicari)
	public function rowCount(){
		return $this->stmt->rowCount();
	}

	/*METHOD UNTUK MENGHITUNG BANYAK RECORD DATABASE*/
	public function hitung(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_NUM);
	}

}