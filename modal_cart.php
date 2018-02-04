<?php 

	$index = $_POST['index'];
	require "connection.php";
	$sql = "SELECT * FROM shops WHERE id = '$index'";
	$result	= mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);

	echo "<div class='uk-card uk-card-default uk-card-body uk-text-center uk-border-rounded'>";
	echo "<form action='cart.php?index=$index' method='POST' class='uk-align-center'>";
	echo "<img class='imgSize' src='$image'>";
	echo "<div class='uk-margin'>";
    echo "<h3 class='uk-card-title uk-text-center'>".$brand."</h3></div>";
	echo "<div class='uk-margin'>";
   	echo "<p class='uk-margin-remove uk-text-center'>".$model."</p></div>";
	echo "<div class='uk-margin'>";
    echo "<p class='uk-margin-remove-top uk-text-center'>P".$price."</p></div>";
	echo "<input class='uk-input uk-text-center uk-form-width-medium uk-margin-bottom uk-border-rounded' type='number' name='quantity' min=1 value=1><br>";
	echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right uk-width-1-3@s' value='Cancel'>";
	echo '<button type="submit" class="uk-button uk-button-secondary uk-width-1-3@s" onclick="UIkit.notification({message: \'Notification message\'})">ADD TO CART</button></div>';
	echo "</form></div>";

?>

