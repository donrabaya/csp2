<?php 

require 'connection.php';
session_start();


$name = $_POST['name'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);


$sql = "INSERT INTO accounts (name, username, email, password, type_id, last_name, address) VALUES ('$name', '$username','$email','$password','1', '$lname', '$address')";
$result = mysqli_query($conn,$sql);
$new_id = mysqli_insert_id($conn);

$_SESSION['username'] = $username;
$_SESSION['type_id'] = 1;
$_SESSION['id'] = $new_id;
header('location: shop.php');

?>