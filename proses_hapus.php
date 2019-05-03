<?php 
include ("konek.php");

$sql = "DELETE FROM angsuran WHERE id_angsuran = '$_GET[id_angsuran]'";
	$query = mysqli_query($mysqli, $sql);

    if($query){
        header('Location: index2.php?status=sukses');
        }else{
            header('Location: index2.php?status=gagal');
            }else{
                die("Akses Dilarang!");
    }
?> 