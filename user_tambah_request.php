<?php
require ('proses_koneksi.php');
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $jumlah_halaman = htmlspecialchars($_POST["jumlah_halaman"]);
    $tanggal_rilis = htmlspecialchars($_POST["tanggal_rilis"]);
    $sinopsis = htmlspecialchars($_POST["sinopsis"]);
    $waktu_input = date("d-m-y  H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $sql = "INSERT INTO request_komik VALUES ('', '$gambar_baru', '$genre', '$jumlah_halaman', '$tanggal_rilis','$sinopsis', '$waktu_input')";

        $result = mysqli_query($conn, $sql);

        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'user_menu.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal ditambah');
                    document.location.href = 'user_tambah_request.php';
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
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Tambah Data</title>
    <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #8d6624;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #ffad32;
      border-radius: 10px;
    }

    .container h1 {
      color: #8d6624;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(241, 148, 26);
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
    <h1>Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload Gambar : </label>
        <input type="file" name="gambar"><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required><br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" required><br><br>
        <label for="jumlah_halaman">Jumlah Halaman : </label>
        <input type="number" name="jumlah_halaman" required><br><br>
        <label for="tanggal_rilis">Tanggal Rilis : </label>
        <input type="date" name="tanggal_rilis" required><br><br>
        <div class="inputBox"
        style="display: flex;
        align-items: center;">
            <label style="margin-right: 10px;"for="sinopsis">Sinopsis : </label>
            <textarea style="width: 40%; height:100px; resize: none;" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <!-- <input style="" type="text" name="sinopsis" required><br><br> -->
        <button type="submit" name="tambah">Tambah</button>
    </form>
    </div>
</body>
</html>