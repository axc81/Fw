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
				<h1>Model</h1><hr>
				<p>Model merupakan class atau tempat representasi khusus untuk melakukan <i>query</i> atau tempat untuk mengolah data mentah dari database berdasarkan permintaan dari user untuk diproses.</p>
				<p>1.&nbsp;&nbsp;&nbsp;Buka folder <span id="note">models</span> yang berada dalam folder app, di dalam folder models buatlah file baru dengan nama <span id="block">mData.php</span> </p>
				<div class="p-3 mb-2 bg-dark text-white">
					<span id="tag"><</span>
					<span id="tag">?</span>
					<span id="tag">php</span>
					<br><br>
					<span id="cd">class</span>
					<span id="nc">mdata</span>
					<span id="tag">{</span>
					<br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="tag">$a;</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function __construct</span>
					<span id="tag">() {</span><br>
					&nbsp;&nbsp;&nbsp;&nbsp;<span id="tag">}</span><br>&nbsp;&nbsp;&nbsp;
					<span id="ep">public</span>
					<span id="cd">function</span>
					<span id="nc">getData</span>
					<span id="tag">() {</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ths">$this</span>
					<span id="tag">->a</span>
					<span id="ep">=</span>
					<span id="str">'John Doe'</span>
					<span id="tag">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="ep">return</span>
					<span id="ths">$this</span>
					<span id="tag">->a;</span>	
					<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}
					</span>
					<br><br>
					<span id="tag">?</span>
					<span id="tag">></span>
				</div>
				<p>Setalah membuat code pada controller coba tampilkan pada web browser dengan url <a href="http://localhost/anscript/Hello" id="uli">http://localhost/anscript/Hallo/tampilModel</a></p>
				Maka tampilan akan seperti dibawah ini. <br>
				<img src="<?= BASE_URL; ?>/userguide/images/model.png"><br>
				<button type="button" class="button-left">
					<a href="<?= BASE_URL; ?>/userguide/tutorial_controller" class="icon-arrow-left-thick"></a>
				</button>
				<button type="button" class="button-right">
					<a href="<?= BASE_URL; ?>/userguide/tutorial_view" class="icon-arrow-right-thick"></a>
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

