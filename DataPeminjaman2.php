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
                <li><a href="daftar.php">Daftar</a></li>
						
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
			<h1 class="fade-down">Data Peminjaman</h1>
			<hr class="mb60">
		</div>
	</section>


	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">		
		
		<section class="container page-section">
			<div class="row white">
				<div class="fade-up col-md-offset-2 col-md-8 single-post-content">
				 <p>
		  <section class="main">
			  <div class="container">
  <p><a href="angsuran.php" style="color: black;">Tambah Data</a><br><br><p>
  <form class="form-horizontal">
  <table class="table table-bordered table-striped" border="1" align="left" cellpadding="5" cellspacing="2">
    <thead>
      <tr>
        <th>No Peminjaman</th>
        <th>No Anggota</th>
        <th>Nama</th>
        <th>Besar Pinjaman</th>
        <th>Total Pinjaman</th>
        <th>Keterangan</th>
        <th>Tanggal Peminjaman</th>
      </tr>
    </thead>
    
    <tbody>
      <?php
        require_once 'konek.php';
        $query = mysqli_query($mysqli, "SELECT * FROM peminjaman");
        while($hasil  = mysqli_fetch_assoc($query)) {
      ?>
		
      <tr>
        <td><?php echo $hasil['id_peminjaman']?></td>
        <td><?php echo $hasil['id_anggota']?></td>
        <td><?php echo $hasil['nama']?></td>
        <td><?php echo $hasil['besar_pinjaman']?></td>
        <td><?php echo $hasil['total_pinjaman']?></td>
        <td><?php echo $hasil['keterangan']?></td>
        <td><?php echo $hasil['tanggal_meminjam']?></td>
        <td><center><a href="from_edit.php?id=<?php echo $hasil['id'];?>">Edit</a> &nbsp
              <a href="proses_hapus.php?id=<?php echo $hasil['id'];?>">hapus</a>
          </center>
          </td>
      </tr>
      <?php }?>
    </tbody>
	  </div>
	  </section>
  </table>

  <div class="row" align="center">
  <!-- <input type="submit" value="Kembali"> -->
  </div>
  </form>
</div>
</section>
        </div>
      </div>
    </div>
  </header>
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
