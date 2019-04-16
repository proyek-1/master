<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "koperasi";
$connect = mysqli_connect($server, $user, $password, $nama_database);

if($connect){
    echo "";
}else{
    die("koneksi gagal karena".mysqli_connect_error());
}
?>