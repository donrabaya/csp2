<?php 

$index = $_GET['index'];

require "connection.php";

$name = $_POST['name'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$username = $_POST['username'];
$email = $_POST['email'];


$sql = "UPDATE accounts SET
		name = '$name',
		email = '$email',
		last_name = '$lname',
		address = '$address'
		WHERE id = $index";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: userprofile.php');


?>
