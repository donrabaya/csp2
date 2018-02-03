<?php 
	require 'connection.php';



	if(isset($_POST['edit'])){
	$index = $_POST['index'];
	$sql = "SELECT * FROM shops WHERE id='$index'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);

	echo "<div class='uk-card uk-card-default uk-card-body uk-border-rounded uk-text-center'>";
	echo "<form action='edit.php?index=$index' method='POST'>";
	echo "<img class='imgSize' src='$image'>";
	echo "<div class='uk-margin'>";
    echo "<input class='uk-input uk-text-center uk-border-rounded' type='text' name='brand' value='$brand'></div>";
	echo "<div class='uk-margin'>";
   	echo "<input class='uk-input uk-text-center uk-border-rounded' type='text' name='model' value='$model'></div>";
	echo "<div class='uk-margin'>";
    echo "<input class='uk-input uk-text-center uk-border-rounded' type='number' name='price' value='$price'></div>";
	echo "";
	echo "<div class='uk-modal-footer uk-text-center'>";
	echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right uk-border-rounded uk-width-1-3@s' value='Cancel'>";
	echo "<input type='submit' class='uk-button uk-button-primary uk-border-rounded thiscolor uk-width-1-3@s' value='Save'></div>";
	echo "</form></div></div>";
    }
?>
