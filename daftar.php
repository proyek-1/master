<?php  
include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head
	<title>Daftar Angsuran</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

    <div id="wrapper">
    <nav id="header">
      <center><ul>
          <a href="homeKop.html"><button name="homeKop.html">Home</button></a>
          <a href="register.php"><button name="register.php">Daftar</button></a>
      </ul></center>
    </nav>
    </div>

  <body>
    <center><h1 class="judul">Daftar Figure </h1></center>
    </header>

      <form action="" method="get" style="color: white;">
      Masukkan Pencarian :
    <input type="text" name="kata_kunci" class="form_control">
    <button type="submit" class="btn btn-primary">Cari</button> 
    </form>

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

<body>
<p></p>

</body>
</html>