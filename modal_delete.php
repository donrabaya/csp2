<?php

$index = $_POST['index'];

require 'connection.php';

$sql = "SELECT * FROM shops WHERE id = '$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
extract($row);

	echo "<div class='uk-card uk-card-default uk-card-body uk-border-rounded uk-text-center'>";
	echo "<img class='imgSize' src='$image'>";
	echo "<div class='uk-margin'>";
    echo "<h3 class='uk-card-title uk-text-center'>".$brand."</h3></div>";
	echo "<div class='uk-margin'>";
   	echo "<p class='uk-margin-remove uk-text-center'>".$model."</p></div>";
	echo "<div class='uk-margin'>";
    echo "<p class='uk-margin-remove-top uk-text-center'>P".$price."</p></div>";
	echo "<div class='uk-modal-footer uk-text-center'>";
	echo "<div class='uk-margin-right'>Confirm item to be deleted</div><br>";
	echo "<input type='button' class='uk-button uk-button-default uk-modal-close uk-margin-right uk-width-1-3@s' value='Cancel'>";
	echo "<a href='delete.php?index=$index'><button class='uk-button uk-button-danger uk-width-1-3@s'>DELETE</button></a></div>";
	echo "</div></div>";

?>
