<html>
<head>
<title>Peminjaman</title>
	<link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
<!--
.style1 {color: #000000} 
.col-75{
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
  padding: 12px 20px;
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
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
		body{
			background-size:cover;
			background-attachment: fixed;
		}
	.ul{
	
	background-color:#0000FF}
  
    </style>
</head>

<body background="gambar kota.jpg" style="width:100%">
					<div class="nav nav-pills nav-justified">
						<ul class="nav nav-pills nav-justified" >
							<li><a href="">HOME</a></li>
							<li><a href="">PEMINJAMAN</a></li>
							<li><a href="">ANGSURAN</a></li>
							<li><a href="">KONTAK</a></li>
							<li><a href="">DAFTAR ANGGOTA</a></li>
						</ul>
					</div>
<form action="proses-input_peminjaman.php" method="POST">

<div class="Logo">
    <p><img src="logo koperasi.png" width="331" height="195"/></p>
    <h1 class="style1" style="color:#FFFFFF" align="center">Peminjaman Koperasi Maju Jaya</h1>
</div>
<div class="container">
  <form action="proses-input_peminjaman.php">
  <div class="row">
    <div class="col-25">
      <label for="id_peminjaman">No Peminjaman</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_peminjaman" name="id_peminjaman">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="id_anggota">No Anggota</label>
    </div>
    <div class="col-75">
      <input type="text" id="id_anggota" name="id_anggota">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name=" nama">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="besar_pinjaman">Besar Pinjaman</label>
    </div>
    <div class="col-75">
      <input type="text" id="besar_pinjaman" name="besar_pinjaman">
    </div>
  </div>  <div class="row">
    <div class="col-25">
      <label for="total_pinjaman">Total Pinjaman</label>
    </div>
    <div class="col-75">
      <input type="text" id="total_pinjaman" name="total_pinjaman">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="keterangan">Keterangan</label>
    </div>
    <div class="col-75">
      <textarea id="keterangan" name="keterangan" style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="tanggal_meminjam">Tanggal Peminjaman</label>
    </div>
    <div class="col-75">
      <input type="date" id="tanggal_meminjam" name="tanggal_meminjam">
    </div>
  </div>

  <div class="row" align="center">
    <input type="submit" value="Tambah" name="tambah">
	<input type="submit" value="Reset">
	<input type="submit" value="Kembali">
  </div>
  </form>
</div>

</form>
</body>
</html>
