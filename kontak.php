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
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['username']?></a>
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
			<h1 class="fade-down">KONTAK KAMI</h1>
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
						<input type="text" name="name" id="name" placeholder="Name" />
						<input type="text" name="email" id="email" placeholder="Email" />
						<input type="text" name="website" id="website" placeholder="Website" />
						<textarea name="comments" id="comments" placeholder="Comments"></textarea>
						<input class="btn btn-success" type="submit" name="submit" value="Submit" />
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
			<h4 class="fade-up">Koperasi Maju Jaya<a href=</a> - Copyright 2019</h4>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>

  </body>
</html>
