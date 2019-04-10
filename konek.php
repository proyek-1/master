<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'koperasi');
	
	if($mysqli){
		echo "Sudah konek";
	}else{
		echo "belum konek";
	}
?>