<?php 
include 'koneksi.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-pass'];

    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT * FROM 'akun' WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('Username Sudah digunakan');
            document.location.href = 'register.php';
            </script>";
        }else {
            $sql = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn) > 0) {
                echo "<script>
                alert('Registrasi Telah Berhasil');
                document.location.href ='login_user.php';
                </script>";
            } else{
                echo "<script>
                alert('Registrasi Gagal!!!');
                document.location.href ='login_user.php';
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
   <form action="login_user.php" method="post" class="box">
       <div class="header_user">
           <h1>REGISTRASI</h1>
       </div>
       <div class="login-area">
           <input type="text" name="username" id="username" class="username" placeholder="Username" required>
           <input type="password" name="password" id="password" class="password" placeholder="Password" required>
           <input type="password"  name="confirm-pass" id="confirm-pass" class="password" placeholder="Konfirmasi Password" required>
           <button type="submit" class="submit" name="register" id="register">Register</button>
           <a href="login_user.php">Sudah punya akun? Login</a>
       </div>
   </form> 
</body>
</html>