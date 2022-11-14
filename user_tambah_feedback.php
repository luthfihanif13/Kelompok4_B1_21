<?php
require ('proses_koneksi.php');
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST["tambah"])) {
    $nama_user = htmlspecialchars($_POST["nama_user"]);
    $isi_feedback = htmlspecialchars($_POST["isi_feedback"]);
    $waktu_upload = date("d-m-y  H:i:s");
    
    $sql = "INSERT INTO feedback VALUES ('', '$nama_user', '$isi_feedback', '$waktu_upload')";

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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Tambah Data</title>
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
      margin-bottom: 50px;
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

    form {
      margin-bottom: 200px;
      text-align: center;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama_user">Nama User: </label>
        <input type="text" name="nama_user" required><br><br>
        <label for="isi_feedback">Isi Feedback : </label>
        <input type="text" name="isi_feedback" required><br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    </div>
</body>
</html>