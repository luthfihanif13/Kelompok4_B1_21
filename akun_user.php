<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Menu Admin</title>
</head>
<body>
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
                $result = mysqli_query($conn, "SELECT * FROM akun WHERE username LIKE '%$keyword%'");
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
                    <td><input type="text" size="15" readonly value="<?= $rowAkun['username'] ?>"></td>
                    <td><a href="delete.php?id=<?= $rowAkun['id'] ?>" class="delete"> Hapus </a></td>
                </tr>
        <?php 
            }
        ?>
        </table>
    </form>
</body>
</html>