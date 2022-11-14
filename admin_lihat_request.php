<?php
require('proses_koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM request_komik");

$request_komik = [];

while ($row = mysqli_fetch_assoc($result)) {
    $request_komik[] = $row;
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
    <style>
    .container {
      width: 95%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      border-radius: 10px;
      margin-top: 25px;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 25px;
      align-items: center;
      background: rgb(117, 159, 26);
    }

    .container h1 {
      color: black;
      text-align: center;
      margin-bottom: 25px;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(107, 202, 81);
      color: #000000;
      margin-bottom: auto;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }

    .del-button{
      background-color: #FF0000;
      color: white;
      padding: 5px 5px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }
    </style>
</head>
<body>
  <header>
    <a href="#"><h1><img src="images/ZhongliB.png" width="140px" height="120px"></h1></a>
    <nav>
      <a href="admin_menu.php">Home</a>
      <a href="admin_lihat_akun_user.php">Lihat Akun</a>
      <a href="admin_lihat_request.php">Lihat Feedback</a>
      <a href="admin_login.php" class="me">Log Out</a>
    </nav>
  </header>
  <div class="mode">
    <p id="change-mode">Dark Mode</p>
    <img id="icon-mode" src="images/moon.png" alt="">
    <input type="checkbox" onclick="lightMode()">
    <br>
  </div>
    <div class="container">
    <h1>Request komik</h1>
    <table border=1px>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Jumlah Halaman</th>
            <th>Tanggal Rilis</th>
            <th>sinopsis</th>
            <th>Waktu Upload</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($request_komik as $req):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo"<img src='img/$req[nama]' width='50' height='50'>";?></td>
            <td><?php echo $req["nama"]; ?></td>
            <td><?php echo $req["genre"] ;?></td>
            <td><?php echo $req["jumlah_halaman"] ;?></td>
            <td><?php echo $req["tanggal_rilis"] ;?></td>
            <td><?php echo $req["sinopsis"] ;?></td>
            <td><?php echo $req["waktu_input"] ;?></td>
            <td><a href="proses_hapus_request.php?id=<?php echo $req["id"]; ?>" onclick = "return confirm('Anda yakin ingin mengahpus data ini ?')" class="del-button">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
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