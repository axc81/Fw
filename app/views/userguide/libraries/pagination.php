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
					<li><a href="<?= BASE_URL; ?>/userguide/tutorial">Tutorial</a></li>
					<li class="fh5co-active"><a href="<?= BASE_URL; ?>/userguide/libraries">Libraries</a></li>
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
				<h1>Pagination Class</h1><hr>
				<p>Pagination Class berfungsi untuk membatasi dan membagi tampilan pada halaman website berdasarkan urutan angka.</p>
				<br>
				<h1>Menggunakan Pagination</h1>
				<p>Pagination dapat diset banyaknya data di controllers ataupun models, serta implementasi tampilan dapat diatur di views, dengan contoh code sebagai berikut :</p>
				<h3>Controllers</h3>
					<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">Pagination</span>
					<span id="ep">extends</span>
					<span id="nc">controller</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">index</span>
					<span id="tag">() {</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="str">$this</span>->limit
					<span id="ep">=</span>
					<span id="no">2</span>;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="str">$this</span>->offset
					<span id="ep">= !</span>
					<span id="cd">empty</span>($_GET[
					<span id="str">'page'</span>])?(($_GET[
					<span id="str">'page'</span>
					<span id="ep">-</span>
					<span id="no">1</span>)
					<span id="ep">*</span>
					<span id="ths">$this</span>->limit):
					<span id="no">0</span>;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$data[
					<span id="str">'product'</span>]
					<span id="ep">=</span>
					<span id="ths">$this</span>->
					<span id="cd">model</span>(
					<span id="str">'Mproduct'</span>)->
					<span id="cd">getAllProducts</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pagConfig
					<span id="ep">=</span>
					<span id="cd">array</span>(
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="str">baseUrl</span>
					<span id="ep">=></span>
					<span id="no">BASE_URL</span>
					<span id="ep">.</span>
					<span id="str">'/Pagination'</span>,
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="str">totalRows</span>
					<span id="ep">=></span>$data[
					<span id="str">'product'</span>]&nbsp;[
					<span id="no">0</span>],
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="str">'perPage'</span>
					<span id="ep">=></span>
					<span id="ths">$this</span>->limit
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pagination
					<span id="ep">= new</span>
					<span id="cd">Pagination</span>($pagConfig);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$data[
					<span id="str">'pagination'</span>]
					<span id="ep">=</span>$pagination->
					<span id="cd">createLinks</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$data[
					<span id="str">'product'</span>]
					<span id="ep">=</span>
					<span id="ths">$this</span>->
					<span id="cd">model</span>(
					<span id="str">'Mproduct'</span>)->
					<span id="cd">getPagin</span>(
					<span id="ths">$this</span>->limit,
					<span id="ths">$this</span>->offset);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->
					<span id="ep">view</span>(
					<span id="str">'index'</span>, $data);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					}
					</span>

					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
				<br>
				<h1>Penjelasan</h1>
				<span id="note">$limit</span>-&nbsp;berfungsi untuk mengatur banyaknya tampilan yang akan ditampilkan pada halaman website "disini limit diset 2".	<br>
				<span id="note">$offset</span>-&nbsp;halaman yang sedang aktif, halaman diset dimulai dari index ke-0 dalam database.<br>
				<span id="note">$data['product']</span>-&nbsp;menampung banyaknya nilai pada database guna untuk menghitung keseluruhan data yang akan dikirim.	<br>
				<span id="note">$pagConfig</span>-&nbsp;berfungsi untuk mengirim nilai pada class pagination untuk membuat pagination, yang meliputi	:<br>				
				<span id="ep">baseUrl</span> - basis halaman pagination. <br>
				<span id="ep">totalRows</span> - menghitung banyaknya row pada database, hal ini berguna untuk set nilai offset. <br>
				<span id="ep">perPage</span> - banyaknya data yang akan ditampilkan pada halaman. <br>
				<span id="note">$pagination = new Pagination($pagConfig)</span>-&nbsp;membuat fungsi baru dari class pagination berdasarkan aturan yang telah dibuat sebelumnnya. <br>
				<span id="note">$data['pagination'] = $pagination->createLinks();</span>-&nbsp;membuat links halaman. <br>
				<span id="note">$data['product'] = $this->model('Mproduct')->getPagin($this->limit, $this->offset);</span>
				mengirim aturan pada model, sehingga dapat melakukan query pada database. <br>
				<span id="note">$this->view('index', $data)</span>-&nbsp;mengirim data ke view untuk ditampilkan.
				<br><br>
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
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;<span id="tag">}</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">getPagin</span>(
					<span id="ths">$limit</span>,
					<span id="ths">$offset</span> ){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->db-></span>
					<span id="cd">query</span>(
					<span id="str">"</span>
					<span id="ep">SELECT * FROM</span>
					<span id="str">product</span>
					<span id="ep">ORDER BY</span>
					<span id="str">pId</span>
					<span id="ep">ASC LIMIT</span>
					<span id="str">$offset, $limit"</span>
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
					<br>&nbsp;&nbsp;&nbsp;&nbsp;}
					&nbsp;&nbsp;&nbsp;&nbsp;
					<br>}
					</span>

					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
					Model berfungsi sebagai penghubung antara controllers dan basis data. Controllers berfungsi sebagai logika dari aplikasi, maka di models qt melakukan query untuk mengolah data.
				<br><br>
				<h3>Views</h3>				
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>?=&nbsp;$data[
					<span id="str">'pagination'</span>]; ?>
				</div>
				view menampilkan data, sehingga hasil dapat dilihat seperti gambar dibawah ini.
				<br><br>
				<img src="<?= BASE_URL; ?>/userguide/images/pagination.png">
				<br><br>	
				<button type="button" class="button-left">
					<a href="<?= BASE_URL; ?>/userguide/lib_fpdf" class="icon-arrow-left-thick"></a>
				</button>
				<button type="button" class="button-right">
					<a href="<?= BASE_URL; ?>/userguide/lib_upload" class="icon-arrow-right-thick"></a>
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

