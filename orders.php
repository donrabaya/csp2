<?php


echo '<div class="uk-position-relative">
		<div class="uk-inline">
    	<img  class="imgHeight" src="assets/images/back2.jpg" alt="">
    	<div class="uk-position-center uk-overlay uk-text-center" uk-grid>
    	<div class="uk-text-center" uk-grid>';

require 'connection.php';

	$sql = "SELECT * FROM accounts WHERE type_id = '1'";
	$result	= mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$user = $row['username'];
		extract($row);
		
		$sql1 = "SELECT * FROM orders";
		$result	= mysqli_query($conn,$sql1);
		while ($row = mysqli_fetch_assoc($result)) {
			$item = $row['shop_id'];
			extract($row);

			$sql2 = "SELECT * FROM shops WHERE id = $item";
			$result2 = mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_assoc($result2);
			extract($row2);

			echo '<div class="uk-width-1-2">
		       				<div class="uk-card uk-card-secondary uk-border-rounded uk-padding-medium uk-align-center uk-card-body">
			       				<h2>'.$user.'</h2>
			       				<h2>'.$brand.'</h2>
			       				<h2>Quantity</h2>
		       				</div>
		    			</div>';
		}

	}

echo '</div>
		</div>
			</div>
    			</div>';

function display_title(){
	echo "Orders Page";
}

function display_content(){
	echo '';
}

require "template.php";
?>
