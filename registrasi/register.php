<!DOCTYPE html>
<html>
<head>
	<title>Daftar Anggota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
	opacity: 0.8;
	font-family: Arial, Helvetica, sans-serif;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
				  <input type="radio" name="jenis_kelamin" id="L" value="L">
				  <label for="L">Laki-Laki</label><br>
				<input type="radio" name="jenis_kelamin" id="P" value="P">
				<label for="P">Perempuan</label><br>
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
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Anggota</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
	opacity: 0.8;
	font-family: Arial, Helvetica, sans-serif;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="proses-input.php" method="POST">
<fieldset>
  <p>
				<label for="nama">Nama Anggota: </label>
				<br><input type="text" name="nama" placeholder="Nama"/></br>
			</p>
			<p>
				Jenis Kelamin:<br>
				  <input type="radio" name="jenis_kelamin" id="L" value="L">
				  <label for="L">Laki-Laki</label><br>
				<input type="radio" name="jenis_kelamin" id="P" value="P">
				<label for="P">Perempuan</label><br>
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
        
    <button type="submit">Register</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="homeKop.html">
    <button type="button" class="cancelbtn">Cancel</button>
    </a>
  </div>
</fieldset>
</form>

</body>
</html> -->