	<?php
	error_reporting (E_ALL ^ E_WARNING || E_NOTICE);
		session_start();
		ob_start();
		

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
							<li><a href="kontak.php">Kontak</a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['username']?> <?=$_SESSION['nama']?></a>
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
	<?php
	$id = mt_rand(10000, 20000);
	?>
          <div class="container">
					<div class="text-center"></div>
					<form class="form-horizontal"action="proses-input_angsuran.php" method="post">
          <!-- Tanggal Angsuran :
			<div class="form-group">
				<label class="control-label col-sm-2" for="tanggal_angsuran"></label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="tanggal_angsuran" name="tanggal_angsuran">
				</div>
      </div>

          No.Angsuran :
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_angsuran"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_angsuran" name="id_angsuran" value="<?= $id?>" disabled>
				</div>
      </div> -->

           No.Anggota :
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_anggota"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_anggota" name="id_anggota">
				</div>
      </div>

      Nama :
			<div class="form-group">
				<label class="control-label col-sm-2" for="nama"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
      </div>
      
      Sisa Peminjaman :
			<div class="form-group">
				<label class="control-label col-sm-2" for="sisa_pinjaman"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="sisa_pinjaman" name="sisa_pinjaman">
				</div>
      </div>
      
      Angsuran Bulanan :
			<div class="form-group">
				<label class="control-label col-sm-2" for="angsuran_bulanan"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="angsuran_bulanan" name="angsuran_bulanan">
				</div>
      </div>
      
      Denda :
			<div class="form-group">
				<label class="control-label col-sm-2" for="denda"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="denda" name="denda">
				</div>
      </div>
      
      Total Bayar :
			<div class="form-group">
				<label class="control-label col-sm-2" for="total_bayar"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="total_bayar" name="total_bayar">
				</div>
      </div>
      
      Bayar Angsuran :
			<div class="form-group">
				<label class="control-label col-sm-2" for="bayar_angsuran"></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="bayar_angsuran" name="bayar_angsuran">
				</div>
			</div>				
			<tr>
        <input type="submit" class="btn btn-success" name="tambah" value="tambah" />
        <input type="submit" class="btn btn-success" name="RESET" value="reset" />
        <input type="submit" class="btn btn-success" name="KEMBALI" value="kembali" />
      <tr>
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
