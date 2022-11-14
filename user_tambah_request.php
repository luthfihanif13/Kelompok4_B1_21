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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Menu User</title>
    <style>
    .container {
        width: 95%;
        height: 85vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
        margin-top: 25px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 25px;
        align-items: center;
        background: #ffad32;
    }

    button[type=submit]{
        margin-bottom: 50px;
        background-color: #8d6624;
        color: white;
        padding: 10px 10px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        text-decoration: none;
    }

    .container h1 {
      color: #8d6624;
      text-align: center;
    }

    .input-text{
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 5px; 
        resize: vertical;
    }

    .input-number{
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 5px; 
        resize: vertical;
    }
    input[type=date]{
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 5px;
        resize: vertical;
    }
    </style>
</head>
<body>
    <header>
    <a href="#"><h1><img src="images/Zhongli.png" width="140px" height="120px"></h1></a>
    <nav>
      <a href="user_menu.php">Home</a>
      <a href="user_tambah_feedback.php">Feedback</a>
      <a href="user_login.php" class="me">Log Out</a>
    </nav>
  </header>
  <div class="mode">
    <p id="change-mode">Dark Mode</p>
    <img id="icon-mode" src="images/moon.png" alt="">
    <input type="checkbox" onclick="lightMode()">
    <br>
  </div>
    <div class="container">
    <h1>Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload Gambar : </label>
        <input type="file" name="gambar"><br>
        <label for="nama">Nama : </label>
        <input type="text" class="input-text" name="nama" required><br><br>
        <label for="genre">Genre : </label>
        <input type="text" class="input-text" name="genre" required><br><br>
        <label for="jumlah_halaman" >Jumlah Halaman : </label>
        <input type="number" class="input-number" name="jumlah_halaman" required><br><br>
        <label for="tanggal_rilis">Tanggal Rilis : </label>
        <input type="date" name="tanggal_rilis" required><br><br>
        <div class="inputBox"
        style="display: flex;
        align-items: center;">
            <label style="margin-right: 10px;"for="sinopsis">Sinopsis : </label>
            <textarea style="width: 40%; height:100px; resize: none;" type="text" name="sinopsis" cols="30" rows="10" class="input-text"></textarea>
        </div>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    </div>
    <footer>
    <nav>
      <br>
      <a href="https://youtube.com/channel/UCjRc-gYlqHi1x9fwCMeVEGw">Youtube</a>
      <a href="https://instagram.com/mirvanhakimmm">Instagram</a>
      <a href="https://www.tiktok.com/@muhammad_irvan_hakim?_t=8VzzYA3N1qj&_r=1">TikTok</a>
    </nav>
    <p>&copy Copyright 2022 - by Kelompok 4 </p>
  </footer>

  <script src="script.js"></script>
</body>
</html>