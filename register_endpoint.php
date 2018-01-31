<?php 

require 'connection.php';
session_start();


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "INSERT INTO accounts (name, username, email, password, type_id) VALUES ('$name', '$username','$email','$password','1')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

$_SESSION['username'] = $username;
$_SESSION['type_id'] = 1;
header('location: shop.php');

?>