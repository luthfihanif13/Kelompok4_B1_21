<?php
require('proses_koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM komik");

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
    <link rel="shortcut icon" href="images/LogoZhongliB.ico">
    <title>Daftar komik</title>
    <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #588d24;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: rgb(117, 159, 26);
      border-radius: 10px;
    }

    .container h1 {
      color: black;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(107, 202, 81);
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
    <h1>Daftar komik</h1>
    <button><a href="admin_tambah_komik.php">Tambah komik</a></button>
    <table border=1px>
        <tr>
            <th>No.</th>
            <th>Sampul</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Waktu Upload</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($komik as $kmk):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo"<img src='img/$kmk[sampul]' width='50' height='50'>";?></td>
            <td><?php echo"<a href='dataKomik/$kmk[data_komik]' target='_blank'>$kmk[nama]</a>";?></td>
            <td><?php echo $kmk["genre"] ;?></td>
            <td><?php echo $kmk["waktu_upload"] ;?></td>
            <td><a href="proses_hapus_komik.php?id=<?php echo $kmk["id"]; ?>" onclick = "return confirm('Anda yakin ingin mengahpus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
    </div>
    
</body>
</html>