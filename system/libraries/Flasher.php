<?php 

class Flasher{

	public static function setFlash($pesan, $aksi, $tipe){
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe
		];
	}

	public static function setFlashLogin($pesanL, $aksiL){
		$_SESSION['flashLogin'] = [
			'pesanL' => $pesanL,
			'aksiL' => $aksiL
		];
	}

	public static function flash(){
		if(isset($_SESSION['flash'])){
			echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
					Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  </div>';
			unset($_SESSION['flash']);	  
		}
	}

	public static function flashLogin(){
		if(isset($_SESSION['flashLogin'])){
			echo '<script>
					alert (" '.$_SESSION['flashLogin']['pesanL'].' , '.$_SESSION['flashLogin']['aksiL'].' ");
				</script>';
			unset($_SESSION['flashLogin']);	  
		}
	}

	public static function infoSukses(){
		echo '<script>alert("sukses item berhasil ditambahkan ke keranjang");
			  </script>';
	}

	public static function infoGagal(){
		echo '<script>alert("GAGAL");
			  </script>';
	}
}

?>