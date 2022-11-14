<?php
require ('proses_koneksi.php');
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $waktu_upload = date("d-m-y  H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $pdf = $_FILES['pdf']['name'];
    $x1 = explode('.', $pdf);
    $extensi1 = strtolower(end($x1));
    $pdf_baru = "$nama.$extensi1";
    $tmp1 = $_FILES['pdf']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/'.$gambar_baru ) && move_uploaded_file($tmp1, 'dataKomik/'.$pdf_baru)) {
        $sql = "INSERT INTO komik VALUES ('', '$gambar_baru', '$pdf_baru', '$nama', '$genre','$waktu_upload')";

        $result = mysqli_query($conn, $sql);
        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'admin_menu.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal ditambah');
                    document.location.href = 'admin_tambah_komik.php';
                </script>
            ";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongliB.ico">
    <title>Tambah Data</title>
    <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #588d24;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: rgb(117, 159, 26);
      border-radius: 10px;
    }

    .container h1 {
      color: black;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(107, 202, 81);
      color: #000000;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Tambah Komik</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload Gambar (Sampul.jpg) : </label>
        <input type="file" name="gambar" required><br>
        <label for="">Upload Komik (Komik.pdf) : </label>
        <input type="file" name="pdf" required><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" placeholder="Contoh (Vol. 01)" required><br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" required><br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    </div>
</body>
</html>