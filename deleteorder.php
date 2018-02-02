<?php 

$index = $_GET['order'];


require 'connection.php';

$sql = "DELETE FROM user_orders WHERE id = '$index'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: orders.php');

?>