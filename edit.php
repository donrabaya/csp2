<?php 

$index = $_GET['index'];

require "connection.php";

$brand = mysqli_real_escape_string($conn,$_POST['brand']);
$model = mysqli_real_escape_string($conn,$_POST['model']);
$price = mysqli_real_escape_string($conn,$_POST['price']);

$sql = "UPDATE shops SET
		brand = '$brand',
		model = '$model',
		price = '$price'
		WHERE id='$index'";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: shop.php');

?>