<?php 

session_start();
require 'connection.php';


if(isset($_POST['register'])){
	$username = $_POST['username'];
	$sql = "SELECT * FROM accounts WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "invalid";
	} else {
		echo "valid";
	}
}


?>