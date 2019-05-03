<html>
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="main.css" />
</head>
<body>
  <h1>Tambah Data</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>ID</td>
    <td><input type="number" name="id"></td>
  </tr>

  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>

  <tr>
    <td>Jenis</td>
    <td><input type="text" name="jenis"></td>
  </tr>

  <tr>
    <td>Harga</td>
    <td><input type="text" name="harga"></td>
  </tr>

  <tr>
    <td>Foto</td>
    <td><input type="file" name="image"></td>
  </tr>
  </table>
  

  <input type="submit" value="Simpan">
  <a href="daftar.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>