<?php
include 'konek.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
   $sql = mysqli_query($connect, "SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");
   $result = mysqli_num_rows($sql);
   if ($result) {
      echo "Anda berhasil masuk!";
      echo  " Klik <a href='index2.html'> disini </a> untuk melanjutkan";
   }else {
      echo "username dan password salah";
   }
}else {
   echo "semua harus diisi dengan benar";
}
?>