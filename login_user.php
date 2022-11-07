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
   <form action="index.php" method="post" class="box">
       <div class="header_user">
           <h1>LOGIN USER</h1>
       </div>
       <div class="login-area">
           <input type="text" class="username" placeholder="Username">
           <input type="password" class="password" placeholder="Password">
           <input type="submit" value="Login" class="submit">
           <a href="login_admin.php">Beralih ke Admin?</a>
           <a href="register.php">Belum punya akun? Register</a>
       </div>
   </form> 
</body>
</html>