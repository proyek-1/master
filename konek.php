<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php  
            $mysqli = mysqli_connect('localhost', 'root', '', 'koperasi');
	
            if($mysqli){
                header('terkoneksi');
            }else{
                header('belum terkoneksi');
            }
        ?>
        <br>
    </body>
</html>
