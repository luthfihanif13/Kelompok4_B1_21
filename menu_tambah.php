<?php
require'koneksi.php';
date_default_timezone_set('asia/kuala_lumpur');

$result = mysqli_query($conn, "SELECT * FROM request_komik");

$request_komik = [];

while ($row = mysqli_fetch_assoc($result)) {
    $request_komik[] = $row;
}

$result = mysqli_query($conn, "SELECT * FROM gambar");
$file = [];

while ($row = mysqli_fetch_assoc($result)) {
    $file[] = $row;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Request komik</title>
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
    <h1>Request komik</h1>
    <button><a href="tambah.php">Tambah Request komik</a></button>
    <table border=1px>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Jumlah Halaman</th>
            <th>Tanggal Rilis</th>
            <th>Deskripsi</th>
            <th>Waktu Upload</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($request_komik as $kmk):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><img src="img/<?= $gambar['nama_file'] ?>" width="50" height="50"></td>
            <td><?php echo $kmk["nama"]; ?></td>
            <td><?php echo $kmk["genre"] ;?></td>
            <td><?php echo $kmk["jumlah_halaman"] ;?></td>
            <td><?php echo $kmk["tanggal_rilis"] ;?></td>
            <td><?php echo $kmk["deskripsi"] ;?></td>
            <td><?php echo"Pukul : ". date("H:i:s"). "<br><br>";?></td>
            <td><a href="edit.php?id=<?php echo $kmk["id"]; ?>">Edit</a> 
            | <a href="hapus.php?id=<?php echo $kmk["id"]; ?>" onclick = "return confirm('And yakin ingin mengahpus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
    </div>
    
</body>
</html>