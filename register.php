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
           <input type="text" class="username" placeholder="Username" required>
           <input type="password" class="password" placeholder="Password" required>
           <input type="password" class="password" type="password" placeholder="Konfirmasi Password" required>
           <input type="submit" value="registrasi" class="submit">
           <a href="login_user.php">Sudah punya akun? Login</a>
       </div>
   </form> 
</body>
</html>