	<?php
	error_reporting (E_ALL ^ E_WARNING || E_NOTICE);
		session_start();
		ob_start();
	//ini
	// if(isset($_SESSION['pegawai'])) {
	// 	echo "<script>alert('Anda harus login')</script>";
	// 	echo "<script>location='login2.php'</script>";
	// 	header('location:login2.php');
	// 	exit();
	// }else{

	// }
		// echo "Welcome" .$_SESSION['username'];
	?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="Infinity | By Distinctive Themes">
			<meta name="author" content="Distinctive Themes">
			<link rel="shortcut icon" href="assets/img/favicon.ico">

			<title>Koperasi Maju Jaya</title>

			<!-- Bootstrap core CSS -->
			<link href="assets/css/bootstrap.css" rel="stylesheet">

			<!-- Custom styles for this template -->   
			<link href="assets/css/elusive-webfont.css" rel="stylesheet" >
			<link href="assets/css/animate.css" rel="stylesheet">
			<link href="assets/css/pe-icons.css" rel="stylesheet">
			<link href="assets/css/style.css" rel="stylesheet">

			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			
			<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
			
			<script src="assets/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

			<style>
			.active, .collap {
			display: none; 
			overflow: hidden;
			}
			</style>
			
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.min.js"></script>
			<![endif]-->
		</head>

	<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

		<div id="preloader"></div>

			<div id="search-wrapper">
				<input id="search-box" placeholder="Search" />
			</div>  
		
			<div id="navbar-main">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">				
						<a class="navbar-brand" href="index.php"><h1>Koperasi Maju Jaya</h1></a>
						<button type="button" class="navbar-toggle dropdown-toggle" id="open-menu" data-toggle="dropdown" data-target="#main-navigation">
							<i class="el-icon-lines"></i>
						</button>
					</div>
					<div class="navbar-collapse collapse" id="main-navigation">
						<ul class="nav navbar-nav">

									<li><a href="index.php">Home</a></li>

									<li><a href="register.php">Daftar</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="peminjaman2.php">Peminjaman</a></li>
									<li><a href="angsuran.php">Angsuran</a></li>

									<li><a href="dataangsuran.php">Data Angsuran</a></li>
									<li><a href="DataPeminjaman2.php">Data Peminjaman</a></li>
								</ul>
							</li>

								<li><a href="kontak.php">Kontak</a></li>

							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="login2.php">Admin</a></li>
								<li><a href="login3.php">Anggota</a></li>
							</ul>
						</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['username']?><?=$_SESSION['nama']?></a>
								<div class="dropdown-menu">
									<h5><a href="logout.php" style="color: black">&nbsp; &nbsp; LOGOUT</a></h5>
								</div>
							</li>
							
							<li> <a href="#" class="search-trigger"><i class="el-icon-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			</div>

		<section class="textdivider single-post-header">
			<div class="container">
				<h1 class="fade-down">UNTUK KITA SEMUA</h1>
				<h3 class="fade-down" style="color: white">KOPERASI MAJU JAYA PILIHAN ANDA</h3>
				<hr class="mb60">
			</div>
		</section>


		<!--  CONTENT WRAPPER -->
		<div id="content-wrapper">		
			
			<section class="container page-section">
				<div class="row white">
					<div class="fade-up col-md-offset-2 col-md-8 single-post-content">

						<div id="message"></div>
						<form method="post" action="sendemail.php" id="contactform">
					<div align="">
					<div align="center"><h2 style="color: black">MISI DAN TUJUAN</h2></div>
					<h3 style="color: black">MISI<br></h3>
					<h4>1. Meningkatkan pelayanan simpan pinjam untuk usaha produktif anggota Koperasi <br>
						2. Meningkatkan pelayanan kebutuhan pokok anggota<br>
						3. Meningkatkan peran serta anggota Koperasi dalam pengembangan Koperasi ke &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; arah yang lebih maju dan produktif<br>
						4. Meningkatkan pembinaan anggota dalam pengembangan usaha unggulan lokalita<br>
						5. Meningkatkan kemitraan dengan pihak lain dalam pengembangan Koperasi </h4>
					</div>
					<div align=""><br>
					<h3 style="color: black">TUJUAN<br></h3>
					<h4>1. Meningkatkan tali persaudaraan dan kebersamaan diantara sesama anggota &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Koperasi <br>
						2. Memberdayakan kegiatan Koperasi hingga fungsinya lebih maksimal, efisien, efektif 
						&nbsp; &nbsp; dan produktif dalam meningkatkan kesejahteraan anggotanya<br>
						3. Meningkatkan pendapatan serta pemerataan kesejahteraan anggota Koperasi 
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; secara profesional<br>
						4. Membuka lapangan pekerjaan baru yang terbuka bagi anggota koperasi dan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; keluarganya <br>
						</h4>
					</div>
						</form>
					</div>
				</div><!-- row -->
			</section>
					
			<section class="section-divider textdivider divider6 page-section">
				<div class="container">
					<h1 class="fade-down">Jl Soekarno Hatta no 62, Kota Malang</h1>
					<hr>
					<div class="fade-up">
						<p>kopmj@gmail.com</p>
						<p>+62 856 876 987</p>
					</div>
				</div>
			</section>
			
			<div class="text-center">
			<div id="contact" class="container page-section">
				<div class="row row white">
					<div class="col-md-19 fade-up">
						<h3>Kontak kami</h3>
						<p><span class="icon icon-home"></span>Jl Soekarno Hatta no 62, Kota Malang<br/>
							<span class="icon icon-phone"></span>+62 856 876 987<br/>
							<span class="icon icon-mobile"></span>+32 734 56<br/>
							<span class="icon icon-envelop"></span> <a href="#">kopmj@gmail.com</a> <br/>
							<span class="icon icon-twitter"></span> <a href="#">@kopmj.com</a> <br/>
							<span class="icon icon-facebook"></span> <a href="#">Koperasi Maju Jaya</a> <br/>
						</p>
					</div><!-- col -->
					</div>
					
							</form><!-- form -->
					
					</div><!-- col -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
				</div><!-- row -->		
			</div>

		</div>
		<!-- CONTENT WRAPPER -->

		<div id="footerwrap">
			<div class="container">
				<div class="btt-wrapper fade-down"><a class="btt-link smoothScroll" href="#headerwrap"><i class="el-icon-chevron-up"></i></a></div>
				<ul id="footer-social" class="fade-down">
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-twitter"></i></a></li>
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-facebook"></i></a></li>
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-googleplus"></i></a></li>
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-flickr"></i></a></li>
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-youtube"></i></a></li>
					<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-rss"></i></a></li>
				</ul>
				<h4 class="fade-up">Koperasi Maju Jaya<a></a> - Copyright 2019</h4>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="assets/js/plugins.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
		<script type="text/javascript" src="assets/js/init.js"></script>

		</body>
	</html>
