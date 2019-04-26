<html>
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="main.css" />
</head>
<body>
  <h1>Tambah Data</h1>
  <form method="post" action="proses-input_peminjaman.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>No Peminjaman</td>
    <td><input type="text" name="id_peminjaman"></td>
  </tr>

	<tr>
    <td>No Anggota</td>
    <td><input type="text" name="id_anggota"></td>
  </tr>

  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>

  <tr>
    <td>Besar Pinjaman</td>
    <td><input type="text" name="besar pinjaman"></td>
  </tr>

  <tr>
    <td>Total Pinjaman</td>
    <td><input type="text" name="total_pinjaman"></td>
  </tr>

  <tr>
    <td>Keterangan</td>
    <td><textarea id="keterangan"></textarea></td>
  </tr>

	<tr>
    <td>Tanggal Meminjam</td>
    <td><input type="date" name="tanggal_meminjam"></td>
  </tr>

  </table>
  

  <input type="submit" value="tambah">
  <a href="daftar.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>