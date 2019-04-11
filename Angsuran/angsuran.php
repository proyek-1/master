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
					<a class="navbar-brand" href="index.html"><h1>Koperasi Maju Jaya</h1></a>
					<button type="button" class="navbar-toggle dropdown-toggle" id="open-menu" data-toggle="dropdown" data-target="#main-navigation">
						<i class="el-icon-lines"></i>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="main-navigation">
					<ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="daftar.php">Daftar</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="peminjaman.html">Peminjaman</a></li>
                <li><a href="angsuran.html">Angsuran</a></li>
								<li><a href="Data Peinjaman.html">Data Peminjaman</a></li>
                <li><a href="dataangsuran.html">Data Angsuran</a></li>
							</ul>
						</li>
							<li><a href="kontak.html">Kontak</a></li>
						<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="login3.php">Admin</a></li>
                <li><a href="login.html">Anggota</a></li>
              </ul>
            </li>	
						<li> <a href="#" class="search-trigger"><i class="el-icon-search"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>

	<section class="textdivider single-post-header">
		<div class="container">
			<h1 class="fade-down">Angsuran</h1>
			<hr class="mb60">
		</div>
	</section>


	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">		
		
		<section class="container page-section">
			<div class="row white">
				<div class="fade-up col-md-offset-2 col-md-8 single-post-content">

					<table class="table table-bordered">
  <div class="container">
  <form action="proses-input_angsuran.php">
  <div class="row">
    <div class="col-25">
      <label for="id_angsuran">No.Angsuran</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_angsuran" name="id_angsuran" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="tanggal_angsuran">Tanggal Angusran</label>
    </div>
    <div class="col-75">
      <input type="date" id="tanggal_angsuran" name="tanggal_angsuran" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="id_anggota">No.Anggota</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_anggota" name="id_anggota" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name="nama" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sisa_pinjaman">Sisa pinjaman</label>
    </div>
    <div class="col-75">
      <input type="text" id="sisa_pinjaman" name="sisa_pinjaman" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="angsuran_bulanan">Angsuran Bulanan</label>
    </div>
    <div class="col-75">
<<<<<<< HEAD:Angsuran/angsuran.php
      <input type="text" id="angsuran_bulanan" name="angsuran_bulanan" placeholder="Angsuran Bulanan">
=======
      <input type="text" id="angsuran_bulanan" name="angsuran_bulanan" placeholder="">
>>>>>>> cf3e67967c4dfc5d6d772a7620ed3eb3ee3cf898:angsuran.php
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="denda">Denda</label>
    </div>
    <div class="col-75">
      <input type="text" id="denda" name="denda" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="total_bayar">total Bayar</label>
    </div>
    <div class="col-75">
      <input type="text" id="total_bayar" name="total_bayar" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="bayar_angsuran">Bayar Angsuran</label>
    </div>
    <div class="col-75">
      <input type="text" id="bayar_angsuran" name="bayar_angsuran" placeholder="">
    </div>
  </div>

    <table align="center">
      <td align="left">
        <input type="submit" value="Tambah" name="tambah">
      </td>
      <td align="center">
        <button>RESET</button>
      </td>
      <td align="right">
        <button>KEMBALI</button>
      </td>
    </table>
</section>
        </div>
      </div>
    </div>
  </header>
<td>
  <td>
    <td>
      <td>
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
