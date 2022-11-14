<?php
    include "proses_koneksi.php";
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
        h3{
            padding-top: 50px;
            font-size: 32px;
            margin-bottom: 50px;
        }
        table th {
            text-align: center;
            background-color: #909090;
            color: black;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            border: 2px solid black;
        }
        table td, table th {
            border: 1px solid black;
            background-color: #B6E388;
            padding: 6px;
            width: 100px;
        }
        .hapus a {
            text-decoration: none;
        }
        tr td .delete{
            background-color: #FF0000;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .search-bar{
            width: 25%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 10px;
            margin-bottom: 15px;
            margin-right: 50%;
            resize: vertical;
            float: right;
        }
        div button[type="submit"]{
            background-color: black;
            color: white;
            margin-top: 10px;
            margin-right: 10px;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
<header>
    <a href="#"><h1><img src="images/ZhongliB.png" width="140px" height="120px"></h1></a>
    <nav>
      <a> Cari Komik <input type="text"></a>
      <a href="admin_menu.php">Home</a>
      <a href="admin_lihat_request.php">Lihat Request Komik</a>
      <a href="admin_lihat_akun_user.php">Lihat Akun</a>
      <a href="admin_login.php" class="me">Log Out</a>
    </nav>
  </header>
  <div class="mode">
    <p id="change-mode">Dark Mode</p>
    <img id="icon-mode" src="images/moon.png" alt="">
    <input type="checkbox" onclick="lightMode()">
    <br>
  </div>
    <form method="GET">
        <h3 align="center">LIST AKUN USER</h3>
        <div><input type="text" name="keyword" placeholder="Cari User" class="search-bar">
        <button type="submit" name="cari">Search</button></div>
        <table align="center" border="0" class="table">
            <tr>
                <th>No</th>
                <th>ID User</th>
                <th>Nama User</th>
                <th>Action</th>
            </tr>
        <?php
            $no = 1;
            if(isset($_GET['cari'])){
                $keyword = $_GET['keyword'];
                $result = mysqli_query($conn, "SELECT * FROM akun WHERE nama LIKE '%$keyword%'");
            } else{
            $result = mysqli_query($conn, "SELECT * FROM akun");
            }
            $akun = [];
            while($rowAkun = mysqli_fetch_assoc($result)){
                $akun[] = $rowAkun;
        ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><input type="text" size="15" readonly value="<?= $rowAkun['id'] ?>"></td>
                    <td><input type="text" size="15" readonly value="<?= $rowAkun['nama'] ?>"></td>
                    <td><a href="proses_hapus_akun.php?id=<?= $rowAkun['id'] ?>" class="delete"> Hapus </a></td>
                </tr>
        <?php 
            }
        ?>
        </table>
    </form>
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