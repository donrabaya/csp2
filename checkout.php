<?php 

session_start();

require 'connection.php';

$_SESSION['cart'][$index] 

$shopId = $_GET['index'];
$quantity1 = $_S$quantity;


$sql = "INSERT INTO orders (quantity, shop_id, account_id) VALUES ('$quantity1', '$shopId', '$account_id')";
mysqli_query($conn, $sql) or die(myslqi_error($conn));

header('location: shop.php');




?>