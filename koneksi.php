<?php 
    $conn = mysqli_connect("localhost", "root", "", "website_komik");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>