<?php 

	session_start();

	$index = $_GET['index'];
	$quantity = $_POST['quantity'];

	if(isset($_SESSION['cart'][$index])) {
		$_SESSION['cart'][$index] += $quantity;
	} else {
		$_SESSION['cart'][$index] = $quantity;
	
	}

	header('location: shop.php');

?>