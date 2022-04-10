<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LLD_authorization</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include "header.php" ?> 
<form method="POST" class="box" action="cont_auth.php">
       <h1>Login</h1>
       <input type="text" name="username_auth" placeholder="Username"><br>
       <input type="password" name="password_auth" placeholder="Password"><br>
       <input type="submit" name="sing" value="login">
       <h3 style="font-size: 10px ">By clicking "Login", you acknowledge that you have read and agree to our Terms of Use and Privacy Policy.</h3>
       <a class="btn2" href="reg.php">click to singup</a>
       <a class="btn2" href="index.php">click to back</a>     
</form>



</body>
</html>