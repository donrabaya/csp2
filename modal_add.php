<?php 

	require 'connection.php';

	if (isset($_POST['add'])) {
		echo "<div class='uk-card uk-card-default uk-card-body'>";
		echo "<form action='add_item.php' method='POST' enctype='multipart/form-data'>";
		echo "<div class='uk-margin'>";
	    echo "<input class='uk-input uk-text-center' type='text' name='brand' placeholder='Brand'></div>";
		echo "<div class='uk-margin'>";
	   	echo "<input class='uk-input uk-text-center' type='text' name='model' placeholder='Model'></div>";
		echo "<div class='uk-margin'>";
	    echo "<input class='uk-input uk-text-center' type='number' name='price' min=0 placeholder='Price'></div>";
	    echo "<input type='file' name='image'><br>";
		echo "<select name='category'><option>--Select Category</option>";

		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			echo "<option value='$id'>$category</option>";
		}
		echo "</select>";
		echo "<div class='uk-modal-footer uk-text-right'>";
		echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right' value='Cancel'>";
		echo "<input type='submit' class='uk-button uk-button-primary' value='Add Item'></div>";
		echo "</form></div></div>";
	}





?>