<?php
    include "proses_koneksi.php";

    $idAkun = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM akun WHERE id='$idAkun'");
        if($query){
            echo"Data Berhasil di Delete";
            header("location:admin_lihat_akun_user.php");
        } else {
            echo"Data Gagal di Delete";
            header("location:admin_lihat_akun_user.php");
        }
?>