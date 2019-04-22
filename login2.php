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
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

  <div id="preloader"></div>

  	<div id="search-wrapper">
  		<input id="search-box" placeholder="Search" />
  	</div>  
  
	  <div id="navbar-main"> </div>
	<div class="" align="center">
	<section class="textdivider single-post-header"> </section>
	<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

        <?php
        session_start();

		ob_start();

		include ("konek2.php");
		?>

				<form action="" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						<p class="tulisan_login"><h3 align="center">Silahkan Login</h3></p>
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat Saya
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Lupa Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn"> 
							Login
						</button>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

						<button> 
							<a href="index.php" style="color: black">Kembali</a>
						</button>
					</div>

				</form>

		<?php
		if(isset($_POST['submit'])){
			$uname = $_POST['username'];
			$pwd = $_POST['password'];
			$query = "SELECT * FROM pegawai WHERE username = '$uname' && password = '$pwd'";
			$data = mysqli_query($connect, $query);
			$total = mysqli_num_rows($data);
			if($total==1){
                $_SESSION = $uname;
				header ('Location: index.php?status=sukses');
			}else{
				echo "login gagal";
			}
		}
		?>

			</div>
	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">
<!-- row -->		
</div>

	</div>
</div>
<!-- CONTENT WRAPPER -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>
	
	

</body>
</html>


