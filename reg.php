<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LLD_registration</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
    include "header.php";
    
?> 
<form class="box" method="post">
       <h1>registration</h1>
       <input type="text" name="username" placeholder="Add username"><br>
       <input type="text" name="email" placeholder="Add e-mail"><br>
       <input type="password" name="password" placeholder="Add password"><br>
       <input type="submit" name="send" value="send"> 
       <h3 style="font-size: 10px">By clicking "Send", you acknowledge that you have read and agree to our Terms of Use and Privacy Policy.</h3>
       

        
   
<?php
session_start();
error_reporting(0);
require 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$str_add_user = "INSERT INTO `users_reg`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";

if ($_POST['send'])
{
if ($username && $password && $email)
{
$run_add_user=mysqli_query( $connect, $str_add_user );
$str_auth_r="SELECT * FROM users_reg WHERE username='$username' && password='$password';";
$run_auth_r=mysqli_query($connect,$str_auth_r);
$user=mysqli_fetch_array($run_auth_r);
    $_SESSION['user']=[
			"username"=>$user['username'],
			"password"=>$user['password'],
            "id"=>$user['id']
			];
if ($run_add_user) 
{?>
    <p style= font-size:15px;>You have registered!</p>
    <?php
    
    header("Location:reg_cont.php");
}
else
{?>
    <p style= color:#ff0000 font-size:15px>Authorization error</p>
    <?php
}
}
else
{ ?>   
    <p style= color:#ff0000 font-size:15px;>Fill in all the fields!</p>
    <?php 
}
}
?>
        <a class="btn2" href="auth.php">click to login</a>
        <a class="btn2" href="index.php">click to back</a>
</form>

</body>
</html>