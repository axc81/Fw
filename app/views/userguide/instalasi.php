<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $data['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
    <link rel="shortcut icon" href="<?= BASE_URL; ?>/userguide/icon_bar.png">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/bootstrap.css">
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/bootstrap.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/style.css">
	<link rel="stylesheet" href="<?= BASE_URL; ?>/userguide/css/styles.css">


	<!-- Modernizr JS -->
	<script src="<?= BASE_URL; ?>/userguide/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo">ANscript</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="<?=BASE_URL; ?>/">Selamat Datang</a></li>
					<li class="fh5co-active"><a href="<?= BASE_URL; ?>/userguide/tutorial">Tutorial</a></li>
					<li><a href="<?= BASE_URL; ?>/userguide/libraries">Libraries</a></li>
					<li><a href="<?= BASE_URL; ?>/userguide/tentang">Tentang ANscript</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 ANscript.</span> 
				</small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-youtube"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>

			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h1>Instalasi</h1><hr>
					<p id="txt">
						1.&nbsp;&nbsp;&nbsp;Download framework ANscript <a href="" id="uli">Download</a><br>
						2.&nbsp;&nbsp;&nbsp;UnZip framework<br>
						3.&nbsp;&nbsp;&nbsp;Pindahkan folder yang telah diextract ke dalam server anda<br>
						4.&nbsp;&nbsp;&nbsp;Buka folder framework yang telah disimpan dalam server, kemudian cari file .htaccess<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= BASE_URL; ?>/userguide/images/rootfolder.png"><br>
						5.&nbsp;&nbsp;&nbsp;Buka notepad kesayangan anda dan masukan code di bawah ini kedalam .htaccess
						<div class="p-3 mb-2 bg-dark text-white">
							RewriteEngine On <br>
							RewriteCond %{HTTP_HOST} !^www.<br>
							RewriteRule ^(.*)$ http://localhost/anscript/public/$1 [R=301,L]
						</div>
						<span id="warning">"Note"</span>
						<span id="block">http://localhost/anscript/</span> <i>merupakan alamat server atau host aplikasi anda</i>. Metode ini berfungsi untuk redirect url ke dalam framework, sehingga user tidak bisa melihat struktur direktori atau root folder aplikasi di dalam server.<br>
						6.&nbsp;&nbsp;&nbsp;Selamat ANscript bisa digunakan, buka web browser kesayangan anda kemudian ketik alamat aplikasi anda <span id="uli">http://localhost/anscript</span>
					</p>
				<button type="button" class="button-right">
					<a href="<?= BASE_URL; ?>/userguide/konfigurasi" class="icon-arrow-right-thick"></a>
				</button>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?= BASE_URL; ?>/userguide/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= BASE_URL; ?>/userguide/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= BASE_URL; ?>/userguide/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= BASE_URL; ?>/userguide/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?= BASE_URL; ?>/userguide/js/jquery.flexslider-min.js"></script>	
	<!-- MAIN JS -->
	<script src="<?= BASE_URL; ?>/userguide/js/main.js"></script>
	<script>
	function myFunction() {
	    var input, filter, ul, li, a, i, txtValue;
	    input = document.getElementById("myInput");
	    filter = input.value.toUpperCase();
	    ul = document.getElementById("myUL");
	    li = ul.getElementsByTagName("li");
	    for (i = 0; i < li.length; i++) {
	        a = li[i].getElementsByTagName("a")[0];
	        txtValue = a.textContent || a.innerText;
	        if (txtValue.toUpperCase().indexOf(filter) > -1) {
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }
	    }
	}
	</script>
	</body>
</html>

