<?php
        <?php 
        $mysqli = mysqli_connect('localhost', 'root', '', 'koperasi');
        mysqli_query($mysqli, "DELETE FROM angsuran WHERE id_angsuran = '$_GET[id_angsuran]'");
        echo "<script type='text/javascript'>alert('Data Terhapus!');</script>";
        echo "<script type='text/javascript'>location='index.php';</script>";
        ?>

        INSERT INTO transaksi
?>