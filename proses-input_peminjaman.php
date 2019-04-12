<?php
include ("konek.php");

if (isset($_POST['tambah'])){
	$id_peminjaman = $_POST['id_peminjaman'];
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$besar_pinjaman = $_POST['besar_pinjaman'];
	$total_pinjaman = $_POST['total_pinjaman'];
	$keterangan = $_POST['keterangan'];
	$tanggal_meminjam = $_POST['tanggal_meminjam'];

	$sql = "INSERT INTO peminjaman VALUES 
	('$id_anggota', '$nama', '$besar_pinjaman', '$total_pinjaman', '$keterangan','$tanggal_meminjam')";
	$query = mysqli_query($mysqli, $sql);

	if ($query){
		header('Location: index.html?status=sukses');
	} else {
		header('Location: index.html?status=gagal');
	}
} else {
	die("Akses Dilarang!");
}
?>