<html>   
<head>
  <title>Edit Data</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="main.css" />
</head>
<body>
  <h1>Edit Data</h1>
  <?php
  		include ("koneksi.php");
  		$query  =  mysqli_query($mysqli, "SELECT * FROM barang where id='".$_GET['id']."'");
  		$hasil  =  mysqli_fetch_assoc($query);
  	?>
  <p>
  <form method="post" action="proses_edit.php?id=<?php echo $hasil['id'];?>" enctype="multipart/form-data">
  <table cellpadding="8">
  
  <td>ID</td>
    <td><input type="number" name="id" value="<?php echo $hasil['id'];?>"></td>
  </tr>
  
  <tr>
    <td>Nama</td>
    <td><input type="text" name="merk" class='from-control' value="<?php echo $hasil['nama'];?>" required></td>
  </tr>

  <tr>
    <td>Jenis</td>
    <td><input type="text" name="tipe" class='from-control' value="<?php echo $hasil['jenis'];?>" required></td>
  </tr>

  <tr>
    <td>Harga</td>
    <td><input type="text" name="harga" class='from-control' value="<?php echo $hasil['harga'];?>" required></td>
  </tr>
  
  <tr>
    <td>Gambar</td>
    <td><img src="img/<?php echo $hasil['gambar']?>" height="100"></td>
    <td><input type="file" name="gambar" class='from-control' value="<?php echo $hasil['image'];?>"></td>
  </tr>
  </table>

  <input type="submit" value="Simpan">
  <a href="daftar.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>