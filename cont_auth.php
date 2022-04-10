<?php
session_start();
error_reporting(0);
require 'connect.php';
$knopka = $_POST['sing'];
$username_auth = $_POST['username_auth'];
$password_auth = $_POST['password_auth'];
$str_auth="SELECT * FROM users_reg WHERE username = '$username_auth' && password = '$password_auth';";
$run_auth=mysqli_query($connect,$str_auth);
$count_user=mysqli_num_rows($run_auth);
$pswd_auth=md5(md5($pswd_auth)).md5($username_auth);
$user=mysqli_fetch_array($run_auth);
$_SESSION['user']=["name"=>$user['name'], "id"=>$user['id']];
if ($username_auth and $password_auth)
{
	if ($count_user==1) {
		header("Location:index_second.php");
	}
    else
    {?>
    <p>Authorization error</p>
    <?php
    }

}
    else
    { ?>   
    <p style= font-size:15px;>Fill in all the fields!</p>
    <?php 
    }
?>