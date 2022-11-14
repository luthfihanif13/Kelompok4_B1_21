<?php
  include 'proses_koneksi.php';
  if(!isset($_SESSION['login'])){
    header("location: user_login.php");
    exit;
  }

  if(isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $result = mysqli_query($conn, "SELECT * FROM komik WHERE nama LIKE '%$keyword%'");
  } else{
  $result = mysqli_query($conn, "SELECT * FROM komik");
  }
  $komik = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $komik[] = $row;
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
    input[type="text"]{
      width: 20%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      margin-right: 10px;
      resize: vertical;
      float: left;
    }
    button[type="submit"] {
      background-color: black;
      color: white;
      margin-right: 60px;
      padding: 8px 10px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      float: left;
    }

  </style>
</head>
<body>
  <header>
    <a href="#"><h1><img src="images/Zhongli.png" width="140px" height="120px"></h1></a>
    <nav>
      <form method="GET">
      <div><input type="text" name="keyword" placeholder="Nama Komik">
      <button type="submit" name="cari">Cari Komik</button></div>
      </form>
      <a href="user_menu.php">Home</a>
      <a href="user_menu_request.php">Request Komik</a>
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
  <main>
      <br>
      <h2><img src="images/jujutsu kaisen.jpg" width="100%" height="500px"></h2>
      <div  class="info">
        <h2>Jujutsu Kaisen</h2>
        <p><a href="dataKomik/Jujutsu Kaisen Vol.01.pdf" target="_blank" class="me">Baca Sekarang!</a>
        </p>
        <br>
        </div>

    <div id="list" class="container">
      <div class="info daftar_komik">
        Komik Lainnya
      </div>
      <div class="box">
      <?php $i = 1; foreach ($komik as $kmk):?>
        <div class="card">
          <?php echo"<img src='img/$kmk[sampul]'>";?>
          <p><?php echo"<a href='dataKomik/$kmk[data_komik]' target='_blank'>$kmk[nama]</a>";?></p>
          <p><span class="genre"><?php echo $kmk["genre"] ;?></span></p>
        </div>
        <?php $i++; endforeach;?>
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