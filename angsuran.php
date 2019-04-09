
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title style color="black">Angsuran Koperasi Maju Jaya</title>
  <style type="text/css">
    {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
  </style>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Koperasi Maju Jaya</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Angsuran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Daftar Anggota</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Angsuran Koperasi </h1>
          <h2 class="text-uppercase text-white font-weight-bold">Maju Jaya</h2>
          <hr class="divider my-4">
          <section class="area">
            <div align="center">
        <table class="table table-bordered">
  <div class="container">
  <form action="proses-input_angsuran.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="id_angsuran">No.Angsuran</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_angsuran" name="id_angsuran" placeholder="No. Angsuran">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="tanggal_angsuran">Tanggal Angsuran</label>
    </div>
    <div class="col-75">
      <input type="date" id="tanggal_angsuran" name="tanggal_angsuran" placeholder="Tanggal Angsuran">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="id_anggota">No.Anggota</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_anggota" name="id_anggota" placeholder="No. Anggota">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name="nama" placeholder="Nama Anggota">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sisa_pinjaman">Sisa pinjaman</label>
    </div>
    <div class="col-75">
      <input type="text" id="sisa_pinjaman" name="sisa_pinjaman" placeholder="Sisa Pinjaman">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="angsuran_bulanan">Angsuran Bulanan</label>
    </div>
    <div class="col-75">
      <input type="text" id="angsuran_bulanan" name="angsuran_bulanan" placeholder="Angsuran Bulanan">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lama_keterlambatan">Lama Keterlambatan</label>
    </div>
    <div class="col-75">
      <input type="text" id="lama_keterlambatan" name="lama_keterlambatan" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="denda">Denda</label>
    </div>
    <div class="col-75">
      <input type="text" id="denda" name="denda" placeholder="Denda">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="total_bayar">Total Bayar</label>
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
        <button type="submit" value="tambah" name="tambah">SIMPAN</button>
      </td>
      <td align="center">
        <button>RESET</button>
      </td>
      <td align="right">
        <button>KEMBALI</button>
      </td>
    </table>
</form>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Kontak Kami</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Koperasi Maju Jaya</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+62322545344</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:kopmj@gmail.com">kopmj@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Koperasi Maju Jaya | MJ</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
