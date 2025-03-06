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
				<h1>Controller Class</h1><hr>
				<p>Controller class berfungsi sebagai penghubung data antara model dan view.</p>
				<br>
				<h1>Menggunakan Controller</h1>
				<p>Controller disimpan pada folder App->controllers, dengan contoh code sebagai berikut :</p>
					<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">Hallo</span>
					<span id="ep">extends</span>
					<span id="nc">controller</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">index</span>
					<span id="tag">() {</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="cd">echo</span>
					<span id="str">"Hallo My Lord"</span>
					<span id="tag">;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">tampilModel</span>
					<span id="tag">() {</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="tag">$data</span>
					<span id="ep">=</span>
					<span id="ths">$this</span>
					<span id="tag">-></span>
					<span id="cd">model</span>(
					<span id="str">'mData'</span>)->
					<span id="cd">getData</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="cd">echo</span>
					<span id="tag">$data;</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">tampilView</span>
					<span id="tag">() {</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="tag">$data</span>
					<span id="ep">=</span>
					<span id="ths">$this</span>
					<span id="tag">-></span>
					<span id="cd">model</span>(
					<span id="str">'mData'</span>)->
					<span id="cd">getData</span>();
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->
					<span id="cd">view</span>(
					<span id="str">'vdata'</span>, $data);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					}
					</span>

					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
				<br>
				<h1>Session dalam Controller</h1>
				<p>Session adalah variabel sementara yang ditempatkan pada sisi server. 
				session biasa digunakan untuk <b>Autentikasi</b> pada halaman login. <br><h3>Cara menggunakan session, redirect, back</h3>
				pada code dibawah session telah ditetapkan apabila seorang user tidak melakukan login, atau bukan data session "USERLOGIN" maka halaman akan dipindahkan kehalaman userlogin untuk set session terlebih dahulu. <br>
				<br>
				selain session pada controller juga terdapat beberapa function yaitu :<br>
				<span id="note">redirect()</span> <i>berfungsi memindahkan kehalaman lain atau halaman yang dituju.</i><br>
				<span id="note">back()</span> <i>berfungsi memindahkan kehalaman yang sebelumnya dituju.</i>

				</p>
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">Hallo</span>
					<span id="ep">extends</span>
					<span id="nc">controller</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">index</span>
					<span id="tag">() {</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">if</span> (
					<span id="ths">$this</span>->
					<span id="cd">notSession</span>(
					<span id="str">"USERLOGIN"</span>) ){
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->
					<span id="cd">redirect</span>(
					<span id="str">"USERLOGIN"</span>);
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>->
					<span id="cd">back</span>();
					

					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					}
					</span>

					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>

				<button type="button" class="button-left">
					<a href="<?= BASE_URL; ?>/userguide/libraries" class="icon-arrow-left-thick"></a>
				</button>
				<button type="button" class="button-right">
					<a href="<?= BASE_URL; ?>/userguide/lib_DatabaseModel" class="icon-arrow-right-thick"></a>
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

