<?php
    include 'proses_koneksi.php';

    if(isset($_POST['login'])){
        $nama = $_POST['nama'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM akun WHERE nama ='$nama'");
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                header("location: user_menu.php");
                exit;
            }
        }
    $error = true;
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
    <?php if(isset($error)){
        echo '<script type="text/javascript">
                window.onload = function () { alert("nama atau Password Salah!"); } 
            </script>'; 
    }?>
   <form method="post" class="box">
       <div class="header_user">
           <h1>LOGIN USER</h1>
       </div>
       <div class="login-area">
           <input type="text" class="username" placeholder="nama" name="nama" id="nama">
           <input type="password" class="password" placeholder="Password" type="password" name="password">
           <button type="submit" name="login" class="submit">Login</button>
           <a href="admin_login.php">Beralih ke Admin?</a>
           <a href="user_registrasi.php">Belum punya akun? Register</a>
       </div>
   </form> 
</body>
</html>