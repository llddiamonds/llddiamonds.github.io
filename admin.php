<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    session_start();
    error_reporting(0);
    require 'connect.php';
    $str_out_users="SELECT * FROM `users_reg` ";
    $run_out_user=mysqli_query($connect,$str_out_users);
    $num_rows=mysqli_num_rows($run_out_user);
    $id_delete=$_GET['del_us'];
    $str_del_users="DELETE FROM `users_reg` WHERE `id` = $id_delete";
    $run_del_users=mysqli_query($connect,$str_del_users);
    ?><table class="table table-striped">
            <tr>
            
            <th class="th_or">
            <th>#
            <th>login
            <th>password
            <th>e-mail
            <th colspan="2">actions
            </tr>
            <?
    while ($out=mysqli_fetch_array($run_out_user)){
                    ?>  <tr>
						<td class="td_or"><? echo "$out[name]"; ?></td>
						<td><? echo "$out[id]"; ?></td>
						<td><? echo "$out[username]"; ?></td>
						<td><? echo "$out[password]"; ?></td>
						<td><? echo "$out[email]"; ?></td>
						<td class="delete_or"><?echo "<a href='?del_us=$out[id]'>delete</a>";?></td>
					    </tr>
					<?
    }
    ?>
</body>
</html>