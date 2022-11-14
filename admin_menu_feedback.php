<?php
require('proses_koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM feedback");

$feedback = [];

while ($row = mysqli_fetch_assoc($result)) {
    $feedback[] = $row;
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
  <title>Feedback</title>
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
      background-color:#B6E388;
    }

    .container h1 {
      color: black;
      text-align: center;
      margin-bottom: 25px;
    }
    

    .edit-button{
      background-color: green;
      color: white;
      padding: 10px 10px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      text-decoration: none;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(117, 159, 26);
      color: #000000;
      margin-bottom: auto;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }
    </style>
</head>
<body>
  <header>
    <a href="#"><h1><img src="images/ZhongliB.png" width="140px" height="120px"></h1></a>
    <nav>
      <a href="user_menu.php">Home</a>
      <a href="user_menu_request.php">Request Komik</a>
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
    <h1>Feedback</h1>
    <table border=1px>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Isi feedback</th>
            <th>Waktu upload</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($feedback as $fee):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $fee["nama_user"]; ?></td>
            <td><?php echo $fee["isi_feedback"] ;?></td>
            <td><?php echo $fee["waktu_upload"] ;?></td>
            <td><a href="proses_hapus_feedback.php?id=<?php echo $fee["id"]; ?>" onclick = "return confirm('Anda yakin ingin mengahpus data ini ?')" class="del-button">Hapus</a></td>
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