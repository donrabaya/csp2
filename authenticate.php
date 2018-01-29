<?php 

session_start();
require 'connection.php';

print_r($users);

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $username;
	$_SESSION['type_id'] = $row['type_id'];
	header('location: shop.php');
} else {
	header('location: loginerror.php');
}


?>

