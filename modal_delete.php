<?php

$index = $_POST['index'];

require 'connection.php';

$sql = "SELECT * FROM shops WHERE id = '$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
extract($row);

	echo "<div class='uk-card uk-card-default uk-card-body'>";
	echo "<img src='$image'>";
	echo "<div class='uk-margin'>";
    echo "<h3 class='uk-card-title uk-text-center'>".$brand."</h3></div>";
	echo "<div class='uk-margin'>";
   	echo "<p class='uk-margin-remove uk-text-center'>".$model."</p></div>";
	echo "<div class='uk-margin'>";
    echo "<p class='uk-margin-remove-top uk-text-center'>P".$price."</p></div>";
	echo "<div class='uk-modal-footer uk-text-right'>";
	echo "<span class='uk-margin-right'>Confirm item to be deleted</span>";
	echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right' value='Cancel'>";
	echo "<a href='delete.php?index=$index'><button class='uk-button uk-button-primary'>DELETE</button></a></div>";
	echo "</div></div>";

?>
