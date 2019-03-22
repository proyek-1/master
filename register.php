<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<header>
		
	</header>
	<form action="proses-input.php" method="POST">
		<fieldset>
			<p>
				<label>ID Anggota: </label>
            	<br><select name="id_anggota">
	                <?php  
	                include 'koneksi.php';
	                $query = mysqli_query($mysqli,"SELECT * FROM anggota");
	                while ($array = mysqli_fetch_assoc($query)) {
	                ?>
	            <option><?php echo $array['nama']; ?></option>
	            	<?php } ?>    
            </select></br>
			</p>
			<p>
				<label for="nama">Nama Anggota: </label>
				<br><input type="text" name="nama" placeholder="Nama"/></br>
			</p>
			<p>
				<label for="harga">Jenis Kelamin: </label>
				<br><input type="select" name="jenis_kelamin" placeholder="Jenis Kelamin"/></br>
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