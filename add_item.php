<?php

require 'connection.php';

$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$image = $target_file;
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = $_POST['price'];
$category = $_POST['category'];

$sql = "INSERT INTO shops (image, brand, model, price, category_id) VALUES ('$image', '$brand', '$model', '$price', '$category')";
mysqli_query($conn, $sql) or die(myslqi_error($conn));

header('location: shop.php');


?>