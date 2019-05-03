<!-- include ("konek.php");

$sql = "DELETE FROM angsuran WHERE id_angsuran = '$_GET[id_angsuran]'";
	$query = mysqli_query($mysqli, $sql);

    if($query){
        header('Location: index2.php?status=sukses');
        }else{
            header('Location: index2.php?status=gagal');
            }else{
                die("Akses Dilarang!");
    } -->

    <?php 
$mysqli = mysqli_connect('localhost', 'root', '', 'koperasi');
mysqli_query($mysqli, "DELETE FROM barang WHERE id = '$_GET[id]'");
echo "<script type='text/javascript'>alert('Data Terhapus!');</script>";
echo "<script type='text/javascript'>location='daftar.php';</script>";
?> 