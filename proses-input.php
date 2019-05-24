<?php
include ("konek.php");
$id = mt_rand(10000, 20000);
if (isset($_POST['tambah'])){
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$no_handphone = $_POST['no_handphone'];

	$sql = "INSERT INTO anggota
	VALUES ('$id','$nama', '$password', '$jenis_kelamin', '$alamat', '$pekerjaan', '$no_handphone')";
	$query = mysqli_query($mysqli, $sql);


	if ($query){
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses Dilarang!");
}
?>