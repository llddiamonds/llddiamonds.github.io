<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your_Order</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
</head>
<body>
<div class="hz">
    
    <?php
    error_reporting(0);
    session_start();
    
    require 'connect.php';
    $str_out_tov="SELECT * FROM `tovar` WHERE user = '".$_SESSION['user']['id']."'";
    $run_out_tov=mysqli_query($connect,$str_out_tov);
    $num_rows=mysqli_num_rows($run_out_tov);
    $id_delete_tov=$_GET['del_tov'];
    $str_del_tov="DELETE FROM `tovar` WHERE `id` = $id_delete_tov";
    $run_del_tov=mysqli_query($connect,$str_del_tov);
    ?><table class="table table-striped">
            <tr>
            
            <th class="th_or">
            <th>Product
            <th>Size
            <th class="del"colspan="2">Actions
            </tr>
    <?php
    while ($out_tov=mysqli_fetch_array($run_out_tov)){
switch ($out_tov['name_tov']) {
                    case '1':
                        $out_tov['name_tov']="Pendant";
                        break;
                    case '2':
                        $out_tov['name_tov']="A ring with a Diamond";
                        break;
                    case '3':
                        $out_tov['name_tov']="Gemstone bracelet on hand";
                        break;
                    
                }
switch ($out_tov['karat']) {
                    case '4':
                        $out_tov['karat']="0.1";
                        break;
                    case '5':
                        $out_tov['karat']="0.3";
                        break;
                    case '6':
                        $out_tov['karat']="0.5";
                        break;
                    case '7':
                        $out_tov['karat']="1";
                        break;
                    case '8':
                        $out_tov['karat']="1.5";
                        break;
                    case '9':
                        $out_tov['karat']="2";
                        break;
                    case '10':
                        $out_tov['karat']="3";
                        break;
                    case '11':
                        $out_tov['karat']="5";
                        break;
                }
    ?>  <tr>
						<td class="td_or"></td>
						<td><? echo "$out_tov[name_tov]"; ?></td>
						<td><? echo "$out_tov[karat]"; ?></td>
						<td class="delete_or"><?echo "<a href='?del_tov=$out_tov[id]'><i class='fas fa-trash'></i></a>";?></td>
					    </tr>
					<?php
    } 
    ?>
</table>
</div>
</body>
</html>