<?php 
	require 'connection.php';



	if(isset($_POST['edit'])){
	$index = $_POST['index'];
	$sql = "SELECT * FROM shops WHERE id='$index'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);

	echo "<div class='uk-card uk-card-default uk-card-body'>";
	echo "<form action='edit.php?index=$index' method='POST'>";
	echo "<img src='$image'>";
	echo "<div class='uk-margin'>";
    echo "<input class='uk-input uk-text-center' type='text' name='brand' value='$brand'></div>";
	echo "<div class='uk-margin'>";
   	echo "<input class='uk-input uk-text-center' type='text' name='model' value='$model'></div>";
	echo "<div class='uk-margin'>";
    echo "<input class='uk-input uk-text-center' type='number' name='price' value='$price'></div>";
	echo "";
	echo "<div class='uk-modal-footer uk-text-right'>";
	echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right' value='Cancel'>";
	echo "<input type='submit' class='uk-button uk-button-primary' value='Save'></div>";
	echo "</form></div></div>";
    }
?>
