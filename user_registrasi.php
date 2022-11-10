<?php 
include 'proses_koneksi.php';
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-pass'];

    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT * FROM akun WHERE nama = '$nama'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('nama Sudah digunakan');
            document.location.href = 'user_registrasi.php';
            </script>";
        }else {
            $sql = "INSERT INTO akun (nama, password) VALUES ('$nama', '$password')";
            $result = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn) > 0) {
                echo "<script>
                alert('Registrasi Telah Berhasil');
                document.location.href ='user_login.php';
                </script>";
            } else{
                echo "<script>
                alert('Registrasi Gagal!!!');
                document.location.href ='user_login.php';
                </script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongli.ico">
    <title>Login User</title>
    <link rel="stylesheet" href="style_login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form method="post" class="box">
       <div class="header_user">
           <h1>REGISTRASI</h1>
       </div>
       <div class="login-area">
           <input type="text" name="nama" id="nama" class="username" placeholder="nama" required>
           <input type="password" name="password" id="password" class="password" placeholder="Password" required>
           <input type="password"  name="confirm-pass" id="confirm-pass" class="password" placeholder="Konfirmasi Password" required>
           <button type="submit" class="submit" name="register" id="register">Register</button>
           <a href="user_login.php">Sudah punya akun? Login</a>
       </div>
   </form> 
</body>
</html>