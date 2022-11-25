<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Tentang Aplikasi</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icon.css" rel="stylesheet">
	<link href="assets/css/listTamu/styles.css" rel="stylesheet">
	<link href="assets/css/listTamu/responsive.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/styleAboutApps.css">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-black.png">

	<?php
	require_once('Admin/Api/koneksi.php');
	?>
</head>

<body>
	<!-- start = Menu -->
	<header>
		<div class="container">
			<a class="logo" href="#"><img src="assets/images/logo-white.png" alt="Logo"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="index.php#sambutan">SAMBUTAN</a></li>
				<li><a href="index.php#ceritaKita">CERITA KITA</a></li>
				<li><a href="gallery.php">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
				<li><a href="aboutApps.php">TENTANG UNDANGAN</a></li>
				<li><a href="Login.php">MASUK</a></li>
			</ul>
		</div>
	</header>
	<!-- end = menu -->

	<section class="section contact-area">
		<div class="container">
			<div class="row">

					<div class="col-sm-12">
					<div class="contact-form margin-bottom">
						<h2 class="center-text">Tentang Aplikasi</h2>
						<form method="post">
							<div class="row">
								<p class="center-text">Aplikasi ini merupakan website yang digunakan untuk wedding invitation, dimana dengan web ini kita dapat mengundang keluarga serta kerabat dengan mudah dan praktis. Wedding invitation akan mengirimkan pesan dan otomatis akan tersampaikan ke aplikasi WhatsApp para tamu undangan, karena sistem pada Wedding invitation ini sudah terhubung dengan WhatsApp dengan menggunkan API. Tidak hanya itu, dengan website ini, kerabat serta keluarga dapat mengetahui dengan detail mengenai resepsi yang akan digelar. </p>
								
							</div><!-- row -->
						</form>
					</div><!-- contact-form -->
				</div><!-- col-sm-6 -->
	

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->


	<!-- start = footer  -->
	<footer>
		<div class="container center-text">

			<div class="logo-wrapper">
				<a class="logo" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
				<i class="icon icon-star"></i>
			</div>
			<ul class="social-icons">
				<?php
				$sosmed = mysqli_query($conn, "SELECT * FROM sosmed");
				while ($infoSosmed = mysqli_fetch_array($sosmed)) {


				?>
					<li><a href="#"><i class="icon icon-heart"></i></a></li>
					<li><a href="<?php echo $infoSosmed['twitter']; ?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
					<li><a href="<?php echo $infoSosmed['ig']; ?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
					<li><a href="<?php echo $infoSosmed['fb']; ?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
				<?php
				}
				?>
			</ul>
			<ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#sambuta">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
			</ul>
			<p class="copyright"> Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script>
				-  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh My Groom</p>
		</div>
	</footer>
	<!-- end = footer -->


	<script src="assets/js/jquery-3.1.1.min.js"></script>


	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.fluidbox.min.js"></script>
	<script src="assets/js/scripts.js"></script>

   

</body>

</html>