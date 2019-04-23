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
							<li><a href="kontak.html">Kontak</a></li>
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
			<div class="row black">
				<div class="fade-up col-md-offset-2 col-md-8 single-post-content">
    </div>
  </div>
          
	<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="proses-input_angsuran.php" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
					</span>
					<span class="txt1 p-b-11">
					Tanggal Angsuran
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Tanggal is required">
						<input class="input100" type="date" name="tanggal_angsuran" placeholder="Nama">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					No. Angsuran
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "ID Angsuran is required">
						<input class="input100" type="text" name="id_angsuran" placeholder="No. Angsuran">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					No. Anggota
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "No. Anggota is required">
						<input class="input100" type="text" name="id_anggota" placeholder="No. Anggota">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					Nama
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama is required">
						<input class="input100" type="text" name="nama" placeholder="Nama">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Sisa Peminjaman
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Sisa Peminjaman is required">
						<input class="input100" type="text" name="sisa_peminjaman" placeholder="Sisa Peminjaman">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Angsuran Bulanan
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Tanggal is required">
						<input class="input100" type="text" name="angsuran_bulanan" placeholder="Nama">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Denda
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Denda is required">
						<input class="input100" type="text" name="denda" placeholder="Denda">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Total Bayar
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Total Bayar is required">
						<input class="input100" type="text" name="total_bayar" placeholder="Total Bayar">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
					Bayar Angsuran
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Bayar Angsuran is required">
						<input class="input100" type="text" name="bayar_angsuran" placeholder="Bayar Angsuran">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
					  <button type="submit" name="tambah" value="tambah" class="login100-form-btn"> 
							Register
						</button>

						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

						<button> 
							<a href="index.php" style="color: black">Kembali</a>
						</button>
						</div>
					</div>

					</div>

				</form>
			</div>


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
