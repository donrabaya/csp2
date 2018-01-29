<?php 

$index = $_GET['index'];


require 'connection.php';

$sql = "DELETE FROM shops WHERE id= '$index'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: shop.php');

?>