<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="height_div">
			<h1>Place your order</h1>
			<p>Here you can choose a product for yourself</p>
			<form method="POST" class="box">
				<section>
				<select name="name_tov" class="vkladk">
					<option selected>Choose a product</option>
					<option value="1">Pendant</option>
					<option value="2">A ring with a Diamond</option>				
					<option value="3">Gemstone bracelet on hand</option>
				</select><br>
				</section>
				<section>
				<select name="karat" class="vkladk">
					<option selected>Choose number of carats</option>
					<option value="4">0.1</option>
					<option value="5">0.3</option>
					<option value="6">0.5</option>
					<option value="7">1</option>
					<option value="8">1.5</option>
					<option value="9">2</option>
					<option value="10">3</option>
					<option value="11">5</option>
				</select><br>
				</section>
				<input type="submit" name="send" value="To order" class="btn">
				<a class="btn2" href="u_ord.php">click to see basket</a>
				<a class="btn2" href="index_second.php">click to back</a>
<?php
error_reporting(0);
session_start();
require 'connect.php';
$send=$_POST['send'];
$karat=$_POST['karat'];
$name_tov=$_POST['name_tov'];
$str_add_tovar="INSERT INTO `tovar` (`user`, `name_tov`, `karat`) VALUES ('".$_SESSION['user']['id']."', '$name_tov', '$karat')";
if ($send) {
	if ($name_tov and $karat) {
		$run_add_tovar=mysqli_query($connect,$str_add_tovar);
    }
}
?>
    </form>
    </div>

</body>
</html>