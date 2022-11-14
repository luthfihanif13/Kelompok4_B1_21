<?php
require ("proses_koneksi.php");
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM request_komik WHERE id=$id");

$request_komik = [];

while ($row = mysqli_fetch_assoc($result)) {
    $request_komik[] = $row;
}

$kmk = $request_komik[0];

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $jumlah_halaman = htmlspecialchars($_POST["jumlah_halaman"]);
    $tanggal_rilis = $_POST["tanggal_rilis"];
    $sinopsis = htmlspecialchars($_POST["sinopsis"]);
    $waktu_input = date("d-m-y  H:i:s");

    $sql = "UPDATE request_komik SET
            nama = '$nama',
            genre = '$genre',
            jumlah_halaman = '$jumlah_halaman',
            tanggal_rilis = '$tanggal_rilis',
            sinopsis = '$sinopsis',
            waktu_input = '$waktu_input'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'user_menu.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'user_menu.php';
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
    <title>Edit Request Komik</title>
</head>
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
<body>
    <div class="container">
    <h1>Edit Request Komik</h1>
    <form action="" method="post">
        <table border=1px>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <tr><td><label for="nama">Nama : </label>
            <input type="text" name="nama" value="<?php echo $kmk["nama"]; ?>" ><br></td></tr>
            <tr><td><label for="genre">Genre : </label>
            <input type="text" name="genre" value="<?php echo $kmk["genre"]; ?>"><br></td></tr>
            </tr><td><label for="jumlah_halaman">jumlah_halaman : </label>
            <input type="number" name="jumlah_halaman" value="<?php echo $kmk["jumlah_halaman"]; ?>"><br></td></tr>
            <tr><td><label for="tanggal_rilis">Tanggal rilis : </label>
            <input type="date" name="tanggal_rilis" value="<?php echo $kmk["tanggal_rilis"]; ?>"><br></td></tr>
            <tr><td><label for="sinopsis">sinopsis : </label>
            <input type="text" name="sinopsis" value="<?php echo $kmk["sinopsis"]; ?>"><br></td></tr>
            <tr><td><button type="submit" name="tambah">Edit</button></td></tr>
        </table>
    </form>
</body>
</html>