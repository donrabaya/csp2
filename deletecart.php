<?php 

session_start();

$index = $_GET['index'];

unset($_SESSION['cart'][$index]);

header('location: shop.php');

?>