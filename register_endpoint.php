<?php 

require 'connection.php';
session_start();


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "INSERT INTO accounts (name, username, email, password, type_id) VALUES ('$name', '$username','$email','$password','1')";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $username;
	$_SESSION['type_id'] = $row['type_id'];
	$_SESSION['id'] = $row['id'];
	header('location: shop.php');
}

?>