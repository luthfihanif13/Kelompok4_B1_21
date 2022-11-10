<?php 
    session_start();
    $username_admin = 'admin';
    $pass_admin = 'admin';
    if (isset($_POST['submit'])) {
        if ($_POST['username'] == $username_admin && $_POST['password'] == $pass_admin){
            //Membuat Session
            $_SESSION["username"] = $username_admin; 
            //Pindahkan Kehalaman Admin
            header("Location: admin_menu.php"); 
        }else {
            // Tampilkan Pesan Error
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Username atau Password Salah!"); } 
                </script>'; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoZhongliB.ico">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style_login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="box">
       <div class="header_admin">
           <h1>LOGIN ADMIN</h1>
       </div>
       <div class="login-area">
           <input type="text" class="username" placeholder="Username" name="username" required>
           <input type="password" class="password" placeholder="Password" name="password" required>
           <button type="submit" name="submit" class="submit">Login</button>
           <a href="user_login.php">Beralih ke User?</a>
       </div>
   </form>
</body>
</html>