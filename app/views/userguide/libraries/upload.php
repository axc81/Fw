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
					<li><a href="<?= BASE_URL; ?>/userguide/struktur_instalasi">Struktur Framework</a></li>
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
				<h1>Upload File Class</h1><hr>
				<p>Upload file berfungsi untuk menyimpan gambar, file pada database dan assets website.
				Cara menggunakan upload file dapat digunakan pada controllers dan models, dimana controllers mengatur logika atau aturan-aturan upload dan models melaksanakan query berdasarkan aturan yang ditetapkan pada controllers.</p>
				<h3>Controllers</h3>
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">Upload</span>
					<span id="ep">extends</span>
					<span id="nc">controller</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>&nbsp;$gambar;

					<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">index</span>
					<span id="tag">() {</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$data[
					<span id="str">'uploads</span>]
					<span id="ep">=</span>
					<span id="ths">$this</span>->
					<span id="cd">model</span>(
					<span id="str">'UploadModel'</span>)->
					<span id="cd">tampilkanSemuaData</span>();
					
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">uploadData</span>
					<span id="tag">() {</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">if</span>(
					<span id="cd">isset</span>($_POST[
					<span id="str">'submit'</span>])){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$upload
					<span id="ep">= new</span>
					<span id="cd">upload</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$gambar = $upload->
					<span id="cd">uploadGambar</span>([
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$upload->namaFile <span id="ep">=</span>&nbsp;$_FILES[<span id="str">'gambar'</span>]&nbsp;[<span id="str">'name'</span>],
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$upload->ukuranFile <span id="ep">=</span>&nbsp;$_FILES[<span id="str">'gambar'</span>]&nbsp;[<span id="str">'size'</span>],
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$upload->error <span id="ep">=</span>&nbsp;$_FILES[<span id="str">'gambar'</span>]&nbsp;[<span id="str">'error'</span>],
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$upload->tmpName <span id="ep">=</span>&nbsp;$_FILES[<span id="str">'gambar'</span>]&nbsp;[<span id="str">'tmp_name'</span>],
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					]);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">if</span>(<span id="ep">!</span>gambar){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ep">return</span>&nbsp;<span id="no">false</span>;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$_POST[<span id="str">'gambar'</span>]&nbsp;<span id="ep">=</span>&nbsp; $gambar;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->
					<span id="cd">model</span>(
					<span id="str">'UploadModel'</span>)-><span id="cd">tambahData</span>($_POST);


					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					}
					</span>

					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
				<br><span id="ep">Penjelasan</span>	<br>
				<span id="note">$_FILES['gambar']['name']</span>-&nbsp;nama file (gambar).
				<br><span id="note">$_FILES['gambar']['size']</span>-&nbsp;ukuran file (gambar).
				<br><span id="note">$_FILES['gambar']['error']</span>-&nbsp;error notifikasi file (gambar).
				<br><span id="note">$_FILES['gambar']['tmp_name']</span>-&nbsp;nama file baru yang telah diconvert.
				<br><br><br>
				<h3>Models</h3>
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">Mproduct</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="tag">$db;</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function __construct</span>
					<span id="tag">() {</span><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->db
					<span id="ep">=&nbsp;new</span>
					<span id="cd">Database</span>;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<span id="tag">}</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">tampilkanSemuaData</span>(){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">query</span>(
					<span id="str">"</span>
					<span id="ep">SELECT * FROM</span>
					<span id="str">upload</span>
					);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">execute</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">return</span>
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">resultSet</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<span id="tag">}</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">tambahData</span>(
					<span id="ths">$data</span>){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$query <span id="ep">=</span><span id="str">"</span>
					<span id="ep">INSERT INTO</span><span id="str">&nbsp;upload&nbsp;</span><span id="ep">value</span>
					<span id="str">(' ', :gambar, :ket)"</span>;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">query</span>($query);	
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">bind</span>(<span id="str">'gambar'</span>, $data[<span id="str">'gambar'</span>]);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">bind</span>(<span id="str">'ket'</span>, <span id="cd">htmlspecialchars</span>($data[<span id="str">'gambar'</span>]));
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">execute</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">return</span>
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">rowCount</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;}	
					&nbsp;&nbsp;&nbsp;&nbsp;
					<br>}
					</span>
					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
				<br>
				<h3>Views</h3>
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<span id="ep">foreach</span>($data[
					<span id="str">'uploads'</span>] <span id="ep">as</span> $data) { <span id="tag">?></span><br>
					<<span id="ep">ul</span>> <<span id="ep">li</span>> <<span id="ep">img</span> <span id="nc">src</span>=
					<span id="str">"< ?</span><span id="str">=</span> <span id="no">BASE_URL </span><span id="str">; ? >/img/$data['gambar']; ? >"</span><span id="nc"> width</span> = <span id="str">"200"</span><span id="nc"> height</span>=<span id="str">"190"</span>><<span id="tag">/</span><span id="ep">li</span>>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">li</span>>Nama Gambar : < ? = $data[<span id="str">'gambar'</span>]; ? >< /<span id="ep">li</span>>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">li</span>>Keterangan : < ? = $data[<span id="str">'ket'</span>]; ? >< /<span id="ep">li</span>>
					<br>
					< /<span id="ep">ul</span>>
					<br>
					< ? php } ?>
					<br><br>
					<
					<span id="ep">form</span>&nbsp;<span id="nc">action</span>=<span id="str">" < ?=</span><span id="no">BASE_URL</span><span id="str">;?>/Upload/uploadData"</span><span id="nc"> method</span>=<span id="str">"post"</span><span id="nc"> enctype</span>=<span id="str">"multipart/form-data"</span>>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">label</span> <span id="nc">for</span>= <span id="str">"gambar"</span>> Gambar : < /<span id="ep">label</span>>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">input</span> <span id="nc">type</span>=<span id="str">"file"</span> <span id="nc">name</span>=<span id="str">"gambar"</span><span id="nc"> id</span>=<span id="str">"gambar"</span>><<span id="ep">br</span>>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">label</span> <span id="nc">for</span>= <span id="str">"ket"</span>> Keterangan : < /<span id="ep">label</span>>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">input</span> <span id="nc">type</span>=<span id="str">"file"</span> <span id="nc">name</span>=<span id="str">"ket"</span><span id="nc"> id</span>=<span id="str">"ket"</span><span id="nc"> required</span>><<span id="ep">br</span>>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<<span id="ep">button</span> <span id="nc">type</span>=<span id="str">"submit"</span> <span id="nc">name</span>=<span id="str">"submit"</span>>Upload< /<span id="ep">button</span>>
					<br>
					< / <span id="ep">form</span>>
				</div>
				<br><br>
				<button type="button" class="button-left">
					<a href="<?= BASE_URL; ?>/userguide/lib_pagination" class="icon-arrow-left-thick"></a>
				</button>
				<button type="button" class="button-right">
					<a href="<?= BASE_URL; ?>/userguide/libraries" class="icon-arrow-right-thick"></a>
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

