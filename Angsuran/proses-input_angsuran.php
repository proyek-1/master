<?php
include ("konek.php");

if (isset($_POST['tambah'])){
	$id_angsuran = $_POST['id_angsuran'];
	$tanggal_angsuran = $_POST['tanggal_angsuran'];
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$sisa_pinjaman = $_POST['sisa_pinjaman'];
	$angsuran_bulanan = $_POST['angsuran_bulanan'];
	$denda = $_POST['denda'];
	$total_bayar = $_POST['total_bayar'];
	$bayar_angsuran = $_POST['bayar_angsuran'];

	$sql = "INSERT INTO angsuran VALUES 
	('$id_angsuran', '$tanggal_angsuran', '$id_anggota', '$nama', '$sisa_pinjaman', '$angsuran_bulanan','$denda','$total_bayar','$bayar_angsuran')";
	$query = mysqli_query($mysqli, $sql);

	if ($query){
		header('Location: homekop.html?status=sukses');
	} else {
		header('Location: homekop.html?status=gagal');
	}
} else {
	die("Akses Dilarang!");
}
?>