<?php 

$user = $_GET['index'];


require 'connection.php';

$sql = "DELETE FROM accounts WHERE id = '$user'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

session_start();
session_destroy();

header('location: home.php');




?>