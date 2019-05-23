<?php
        $mysqli = mysqli_connect('localhost', 'root', '', 'koperasi');
        mysqli_query($mysqli, "UPDATE peminjaman SET denda = (besar_pinjaman*0.1) WHERE id_anggota = '$_GET[id_anggota]'");
        echo "<script type='text/javascript'>alert('!');</script>";
        // echo "<script type='text/javascript'>location='index.php';</script>";
        

        // $sql = "INSERT INTO anggota
	// VALUES ('$id_anggota','$nama', '$password', '$jenis_kelamin', '$alamat', '$pekerjaan', '$no_handphone')";
        // $query = mysqli_query($mysqli, $sql);
        
        // SELECT a.id_transaksi, tanggal_lunas, keterangan, p.id_pegawai FROM transaksi 
        // INNER JOIN anggota AS a
        // ON id_transaksi = a.id_anggota
        // INNER JOIN pegawai AS p
        // ON id_pegawai = p.id_pegawai
        // INNER JOIN angsuran AS an
        // ON id_angsuran = an.id_angsuran
        // INNER JOIN peminjaman AS p
        // ON id_peminjaman = p.id_peminjaman;
        
        // UPDATE peminjaman SET denda = (besar_pinjaman*0.1) WHERE id_anggota = $id_anggota;


?>