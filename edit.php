<?php
require 'koneksi.php';
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
    $tanggal_rilis = ($_POST["tanggal_rilis"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    $sql = "UPDATE request_komik SET
            nama = '$nama',
            genre = '$genre',
            jumlah_halaman = '$jumlah_halaman',
            tanggal_rilis = '$tanggal_rilis',
            deskripsi = '$deskripsi'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
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
<body>
    <h1>Edit Request Komik</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" value="<?php echo $kmk["nama"]; ?>" ><br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" value="<?php echo $kmk["genre"]; ?>"><br><br>
        <label for="jumlah_halaman">jumlah_halaman : </label>
        <input type="number" name="jumlah_halaman" value="<?php echo $kmk["jumlah_halaman"]; ?>"><br><br>
        <label for="tanggal_rilis">Tanggal rilis : </label>
        <input type="date" name="Tanggal rilis" value="<?php echo $kmk["tanggal_rilis"]; ?>"><br><br>
        <label for="deskripsi">Deskripsi : </label>
        <input type="text" name="Deskripsi" value="<?php echo $kmk["deskripsi"]; ?>"><br><br>
        <button type="submit" name="tambah">Edit</button>
    </form>
</body>
</html>