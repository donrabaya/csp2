<?php 

session_start();

$index = $_GET['index'];

if (isset($_POST['change_quantity'])) {
	$quantity = $_POST['change_quantity'];
	$_SESSION['cart'][$index] = $quantity;

	header('location: shop.php');
}




?>