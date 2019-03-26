<!DOCTYPE html>
<html>
<head>
	<title>Daftar Anggota</title>
</head>
<body>
	<header>
		
	</header>
	<form action="proses-input.php" method="POST">
		<fieldset>
			<p>
				<label for="nama">Nama Anggota: </label>
				<br><input type="text" name="nama" placeholder="Nama"/></br>
			</p>
			<p>
				Jenis Kelamin:<br>
				  <input type="radio" name="Jenis Kelamin" id="Laki-Laki" value="Laki-Laki">
				  <label for="male">laki-Laki</label><br>
				<input type="radio" name="Jenis Kelamin" id="Perempuan" value="Perempuan">
				<label for="female">Perempuan</label><br>
			</p>
			<p>
				<label for="stok">Alamat: </label>
				<br><input type="text" name="alamat" placeholder="Alamat"/></br>
			</p>
			<p>
				<label for="nama">Pekerjaan : </label>
				<br><input type="text" name="pekerjaan" placeholder="Pekerjaan"/></br>
			</p>
			<p>
				<label for="nama">No Handphone: </label>
				<br><input type="text" name="no_handphone" placeholder="No Handphone"/></br>
			</p>
			<p>
				<input type="submit" value="Tambah" name="tambah">
			</p>
		</fieldset>
	</form>
</body>
</html>