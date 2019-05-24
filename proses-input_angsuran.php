<?php
include ("konek.php");
$id = mt_rand(10000, 20000);
$today = date("d/m/Y"); 
if (isset($_POST['tambah'])){
	// $id_angsuran = $_POST['id_angsuran'];
	// $tanggal_angsuran = $_POST['tanggal_angsuran'];
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$sisa_pinjaman = $_POST['sisa_pinjaman'];
	$angsuran_bulanan = $_POST['angsuran_bulanan'];
	$denda = $_POST['denda'];
	$total_bayar = $_POST['total_bayar'];

	$sql = "INSERT INTO angsuran VALUES 
	('$id', '$today', '$id_anggota', '$nama', '$sisa_pinjaman', '$angsuran_bulanan','$denda','$total_bayar')";
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