<?php 

class Upload {
	public $namaFile, $ukuranFile, $error, $tmpName, $namaFilebaru;
	public function uploadGambar(){
		$this->namaFile; 
		$this->ukuranFile ;
		$this->error;
		$this->tmpName;
		if ($this->error === 4) {
			echo "<script>
				alert('Pilih Gambar terlebih dahulu !');
			</script>";
		return false;	
		}

		//cek apakah yang diupload gambar
		$ekstensiGambarValid = ['jpg','jpeg','png'];
		$ekstensiGambar = explode('.', $this->namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
				alert('Bukan Gambar !');
			</script>";
		return false;
		}

		//cek ukuran terlalu besar
		if ($this->ukuranFile > 100000) {
			echo "<script>
				alert('Ukuran Terlalu Besar !');
			</script>";
		return false;
		}

		//lolos pengecekan
		//generate nama gambar baru
		$namaFilebaru = uniqid();
		$namaFilebaru .= '.';
		$namaFilebaru .= $ekstensiGambar;
		//var_dump($namaFilebaru); die;

		move_uploaded_file($this->tmpName, 'img/' . $namaFilebaru);
		return $namaFilebaru;
	}
}
