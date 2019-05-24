<?php
include ("konek.php");
$id = mt_rand(10000, 20000);
$today = date("Y/m/d"); 
if (isset($_POST['tambah'])){
	// $id_peminjaman = $_POST['id_peminjaman'];
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$besar_pinjaman = $_POST['besar_pinjaman'];
	$keterangan = $_POST['keterangan'];
	// $tanggal_meminjam = $_POST['tanggal_meminjam'];

	$sql = "INSERT INTO peminjaman VALUES 
	('$id', '$id_anggota', '$nama', '$besar_pinjaman', '$keterangan','$today')";
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