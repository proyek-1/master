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

<body background="gambar/gambar kota.jpg" style="width:100%">
					<div class="nav nav-pills nav-justified">
						<ul class="nav nav-pills nav-justified" >
							<li><a href="">HOME</a></li>
							<li><a href="">PEMINJAMAN</a></li>
							<li><a href="">ANGSURAN</a></li>
							<li><a href="">KONTAK</a></li>
							<li><a href="">DAFTAR ANGGOTA</a></li>
						</ul>
					</div>
<form action="../../../../Peminjaman.html" method="get">

<div class="Logo">
    <p><img src="gambar/logo koperasi.png" width="331" height="195"/></p>
    <h1 class="style1" style="color:#FFFFFF" align="center"> Data Angsuran Koperasi Maju Jaya</h1>
</div>


<?php 
      require_once 'konek.php';
      if (isset($_GET['kata_kunci'])) {
        $kata_kunci = $_GET['kata_kunci'];
        $query = mysqli_query($mysqli, "SELECT * FROM angsuran
                    WHERE 
                    id_anggota  LIKE '%$kata_kunci%'
                    ");
      }else{
        $query = mysqli_query($mysqli,"SELECT * FROM angsuran where id_deleted=0");
      }
      ?>
      <p>

      <p><a href="angsuran.php" style="color: black;">Tambah Data</a><br><br><p>
  <table border="1" align="center" cellpadding="5" cellspacing="2">
    <thead>
      <tr>
        <th>ID Angsuran</th>
        <th>Tanggal Angsuran</th>
        <th>ID Anggota</th>
        <th>Nama</th>
        <th>Sisa Pinjaman</th>
        <th>Angsuran Bulanan</th>
        <th>Lama Keterlambatan</th>
        <th>Denda</th>
        <th>Total Bayar</th>
        <th>Bayar Angsuran</th>
      </tr>
    </thead>
    
    <tbody>
      <?php
        require_once 'konek.php';
        $query = mysqli_query($mysqli, "SELECT * FROM angsuran");
        while($hasil  = mysqli_fetch_assoc($query)) {
      ?>
      <tr>
        <td><?php echo $hasil['id_angsuran']?></td>
        <td><?php echo $hasil['tanggal_angsuran']?></td>
        <td><?php echo $hasil['id_anggota']?></td>
        <td><?php echo $hasil['nama']?></td>
        <td><?php echo $hasil['sisa_pinjaman']?></td>
        <td><?php echo $hasil['angsuran_bulanan']?></td>
        <td><?php echo $hasil['lama_keterlambatan']?></td>
        <td><?php echo $hasil['denda']?></td>
        <td><?php echo $hasil['total_bayar']?></td>
        <td><?php echo $hasil['bayar_angsuran']?></td>
        <td><center><a href="from_edit.php?id=<?php echo $hasil['id'];?>">Edit</a> &nbsp
              <a href="proses_hapus.php?id=<?php echo $hasil['id'];?>">hapus</a>
          </center>
          </td>
      </tr>
      <?php }?>
    </tbody>
  </table>

  <div class="row" align="center">
  <!-- <input type="submit" value="Kembali"> -->
  </div>
  </form>
</div>

</form>
</body>
</html>
