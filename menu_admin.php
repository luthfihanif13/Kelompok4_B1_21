<?php 
  session_start();
  
  if (!isset($_SESSION['username'])) {
      header("Location: login_admin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_admin.css">
  <link rel="shortcut icon" href="images/LogoZhongli.ico">
  <title>Admin</title>
</head>
<body>
  <header>
    <a href="#"><h1><img src="images/Zhongli.png" width="45%"></h1></a>
    <nav>
      <a href="#home">Home</a>
      <a>Cari Komik <input type="text"></a>
      <a href="menu_tambah.php">Request Komik</a>
      <a href="#biodata" class="me">About Me</a>
      <a href="login_admin.php" class="me">Log Out</a>
    </nav>
  </header>

  <div class="mode">
    <p id="change-mode">Dark Mode</p>
    <img id="icon-mode" src="images/moon.png" alt="">
    <input type="checkbox" onclick="lightMode()">
  </div>
  
  <main>
      <h2><img src="images/jujutsu kaisen.jpg" width="1600px" height="500px"></h2>
      <div  class="info">
        <h2>Jujutsu Kaisen</h2>
        <p><a href="#biodata" class="me">Baca Sekarang!</a>
        </p>
        <br>
        </div>

    <div id="list" class="container">
      <div class="info daftar_komik">
        Komik Lainnya
      </div>
      <div class="box">
        <div class="card">
          <img src="images/detektif conan.jpg" alt="Komik">
          <p><a href="#">detektif conan</a></p>
          <p><span class="genre">Action, mystery</span></p>
        </div>
        <div class="card">
          <img src="images/attack on titan.jpg" alt="Komik">
          <p><a href="#">attack on titan</a></p>
          <p><span class="genre">Action, thriller</span></p>
        </div>
        <div class="card">
          <img src="images/demon slayer.jpg" alt="Komik">
          <p><a href="#">demon slayer</a></p>
          <p><span class="genre">thriller, drama</span></p>
        </div>
        <div class="card">
          <img src="images/one punch man.png" alt="Komik">
          <p><a href="#">one punch man</a></p>
          <p><span class="genre">comedy, action</span></p>
        </div>
        <div class="card">
          <img src="images/tokyo ghoul.jpg" alt="Komik">
          <p><a href="#">tokyo ghoul</a></p>
          <p><span class="genre">slice of life, thriller</span></p>
        </div>
        <div class="card">
          <img src="images/my hero academia.jpg" alt="Komik">
          <p><a href="#">my hero academia</a></p>
          <p><span class="genre">action, fantasy</span></p>
        </div>
        <div class="card">
          <img src="images/naruto.jpg" alt="Komik">
          <p><a href="#">naruto</a></p>
          <p><span class="genre">action, fantasy</span></p>
        </div>
        <div class="card">
          <img src="images/batman.jpg" alt="Komik">
          <p><a href="#">batman</a></p>
          <p><span class="genre">action, comedy</span></p>
        </div>
        <div class="card">
          <img src="images/spiderman.jpeg" alt="Komik">
          <p><a href="#">spiderman</a></p>
          <p><span class="genre">action, drama</span></p>
        </div>
        <div class="card">
          <img src="images/assassination classroom.jpg" alt="Komik">
          <p><a href="#">yellow octopus</a></p>
          <p><span class="genre">drama, comedy</span></p>
        </div>
      </div>
    </div>

    <div id="biodata">
      <img src="images/foto profil.jpg" alt="Foto Profile">
      <div class="data">
        <p>Nama</p>
        <p>NIM</p>
        <p>Program Studi</p>
        <p>Angkatan</p>
        <p>No. HP</p>
        <p>Hobi</p>
      </div>
      <div class="data">
        <p>: Muhammad Irvan Hakim</p>
        <p>: 2109106057</p>
        <p>: Informatika</p>
        <p>: 2021</p>
        <p>: 081346606222</p>
        <p>: Main Tekken 7 dan Fall Guys</p>
      </div>
    </div>
  </main>

  <footer>
    <nav>
      <a href="https://youtube.com/channel/UCjRc-gYlqHi1x9fwCMeVEGw">Youtube</a>
      <a href="https://instagram.com/mirvanhakimmm">Instagram</a>
      <a href="https://www.tiktok.com/@muhammad_irvan_hakim?_t=8VzzYA3N1qj&_r=1">TikTok</a>
    </nav>
    <p>&copy Copyright 2022 - by Irvan </p>
  </footer>

  <script src="script.js"></script>
</body>
</html>