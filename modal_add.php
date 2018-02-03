<?php 

	require 'connection.php';

	if (isset($_POST['add'])) {
		echo "<div class='uk-card uk-card-default uk-card-body uk-text-center uk-border-rounded'>";
		echo "<form action='add_item.php' method='POST' enctype='multipart/form-data'>";
		echo "<div class='uk-margin'>";
	    echo "<input class='uk-input uk-text-center uk-border-rounded' type='text' name='brand' placeholder='Brand'></div>";
		echo "<div class='uk-margin'>";
	   	echo "<input class='uk-input uk-text-center uk-border-rounded' type='text' name='model' placeholder='Model'></div>";
		echo "<div class='uk-margin'>";
	    echo "<input class='uk-input uk-text-center uk-border-rounded' type='number' name='price' min=0 placeholder='Price'></div>";
	    echo " <div class='uk-text-center uk-border-rounded' uk-form-custom='target: true'><input type='file'><input class='uk-input' name='image' placeholder='SELECT FILE'></div><br><br>";
		echo "<select class='uk-select uk-form-width-medium uk-border-rounded' name='category'><option>--Select Category</option>";

		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			echo "<option value='$id'>$category</option>";
		}
		echo "</select>";
		echo "<br><br>";
		echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right uk-border-rounded uk-width-1-3@s' value='Cancel'>";
		echo "<input type='button' class='uk-button uk-button-primary uk-border-rounded thiscolor uk-width-1-3@s' value='Add Item'></div>";
		echo "</form></div></div>";
	}





?>