<?php 
  session_start();
  
  if (!isset($_SESSION['username'])) {
      header("Location: admin_login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_admin.css">
  <link rel="shortcut icon" href="images/LogoZhongliB.ico">
  <title>Menu Admin</title>
</head>
<body>
  <header>
    <a href="#"><h1><img src="images/Zhongli.png" width="140px" height="120px"></h1></a>
    <nav>
      <a> Cari Komik <input type="text"></a>
      <a href="admin_menu.php">Home</a>
      <a href="admin_lihat_request.php">Request Komik</a>
      <a href="admin_login.php" class="me">Log Out</a>
    </nav>
  </header>
  <div class="mode">
    <p id="change-mode">Dark Mode</p>
    <img id="icon-mode" src="images/moon.png" alt="">
    <input type="checkbox" onclick="lightMode()">
    <br>
  </div>
  <main>
      <br>
      <h2><img src="images/jujutsu kaisen.jpg" width="100%" height="500px"></h2>
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
          <p><a href="dataKomik/detektif conan.pdf" target="_blank">detektif conan</a></p>
          <p><span class="genre">Action, mystery</span></p>
        </div>
        <div class="card">
          <img src="images/attack on titan.jpg" alt="Komik">
          <p><a href="dataKomik/AOT Shingeki no Kyojin Vol.01.pdf" target="_blank">attack on titan</a></p>
          <p><span class="genre">Action, thriller</span></p>
        </div>
        <div class="card">
          <img src="images/demon slayer.jpg" alt="Komik">
          <p><a href="dataKomik/demon slayer.pdf" target="_blank">demon slayer</a></p>
          <p><span class="genre">thriller, drama</span></p>
        </div>
        <div class="card">
          <img src="images/one punch man.png" alt="Komik">
          <p><a href="dataKomik/One Punch Man Vol.01.pdf" target="_blank">one punch man</a></p>
          <p><span class="genre">comedy, action</span></p>
        </div>
        <div class="card">
          <img src="images/tokyo ghoul.jpg" alt="Komik">
          <p><a href="dataKomik/Tokyo Ghoul Vol.01.pdf" target="_blank">tokyo ghoul</a></p>
          <p><span class="genre">slice of life, thriller</span></p>
        </div>
        <div class="card">
          <img src="images/my hero academia.jpg" alt="Komik">
          <p><a href="dataKomik/Boku no Hero Academia Vol.01.pdf" target="_blank">my hero academia</a></p>
          <p><span class="genre">action, fantasy</span></p>
        </div>
        <div class="card">
          <img src="images/naruto.jpg" alt="Komik">
          <p><a href="dataKomik/komik-naruto.pdf" target="_blank">naruto</a></p>
          <p><span class="genre">action, fantasy</span></p>
        </div>
        <div class="card">
          <img src="images/batman.jpg" alt="Komik">
          <p><a href="dataKomik/komikBatman.pdf" target="_blank">batman</a></p>
          <p><span class="genre">action, comedy</span></p>
        </div>
        <div class="card">
          <img src="images/spiderman.jpeg" alt="Komik">
          <p><a href="dataKomik/spiderman-comic.pdf" target="_blank">spiderman</a></p>
          <p><span class="genre">action, drama</span></p>
        </div>
        <div class="card">
          <img src="images/assassination classroom.jpg" alt="Komik">
          <p><a href="dataKomik/assassination classroomVol.01.pdf" target="_blank">yellow octopus</a></p>
          <p><span class="genre">drama, comedy</span></p>
        </div>
      </div>
    </div>
    <br>
    <br>
  </main>

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