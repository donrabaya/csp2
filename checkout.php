<?php 

session_start();

require 'connection.php';

$index = $_GET['index'];
$account = $_SESSION['id'];
$subtotal = $_POST['subtotal'];

if (isset($_POST['change_quantity'])) {
	$quantity = $_POST['change_quantity'];
	$_SESSION['cart'][$index] = $quantity;
}

// $quantity1 = $_POST['quantity'];

//insert into new table; get id = mysqli_last_id
mysqli_query($conn,"INSERT INTO user_orders (account_id) VALUES ('$account')");
$new_user_id = mysqli_insert_id($conn);


foreach ($_SESSION['cart'] as $index => $quantity) {
	
	$sql1 = "SELECT * FROM shops WHERE id = '$index'";
	$result = mysqli_query($conn,$sql1);
	$row = mysqli_fetch_assoc($result);
	$subtotal = $quantity * $row['price'];


	$sql = "INSERT INTO orders (quantity, shop_id, user_order_id, subtotal) VALUES ('$quantity', '$index', '$new_user_id', '$subtotal')";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));

}





header('location: Thanks.php');


?>