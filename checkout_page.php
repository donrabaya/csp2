<?php 

function display_title(){
	echo "Login Page";
};


function display_content(){
	require 'connection.php';
	if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	}

			$total = 0;
			$subtotal = 0;

			if (isset($_SESSION['username'])) {
				echo '<div class="uk-section uk-section-large profile">
			
    			<div class="uk-container">';

    			echo '<div class="uk-panel uk-light uk-margin-medium">';
				echo "<h1 class='heroWhite uk-text-center'>".$username."'s ITEMS</h1>";
				echo '</div>
				 <div class="uk-child-width-1-3@m uk-text-left uk-margin-large-top" uk-grid>
			            ';
			}

			if (isset($_SESSION['cart'])) {
				
			
			foreach ($_SESSION['cart'] as $index => $quantity) {
					$sql = "SELECT * FROM shops WHERE id='$index'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					extract($row);

					$subtotal = $row['price'] * $quantity;
					$total = $total + $subtotal;

					echo "<div><div class='uk-card uk-card-default uk-card-body uk-width-1-1 uk-border-rounded'>";

					echo "<form class='container' method='POST' action='changequantity.php?index=$index'>";
					echo "<img src='$image'>";
					echo '<div class="uk-grid-small" uk-grid>
							<div class="uk-width-expand" uk-leader>BRAND:</div>
							<div>'.$brand.'</div>
						</div>';
					echo '<div class="uk-grid-small" uk-grid>
							<div class="uk-width-expand" uk-leader>MODEL:</div>
							<div>'.$model.'</div>
						</div>';
					echo '<div class="uk-grid-small" uk-grid>
							<div class="uk-width-expand" uk-leader>QUANTITY:</div>
							<div>'.$quantity.'</div>
						</div>';
					echo '<div class="uk-grid-small" uk-grid>
							<div class="uk-width-expand" uk-leader>SUBTOTAL:</div>
							<div>PHP'.$subtotal.'</div>
						</div>';
					echo "<input value='$subtotal' name='subtotal' class='total'><br>";
					echo "<a href='deletecheckout.php?index=$index'><button type='button' class='uk-button uk-button-danger uk-align-center uk-border-rounded'>Remove</button></a>";
					echo "</form>";						
			echo "</div></div>";
			}	
				}
			echo "</div>";

			echo '<div class="uk-container uk-text-center uk-margin-xlarge-top">';
			echo "<div class='uk-card-default uk-padding-small uk-margin-top cartColor uk-width-1-3 uk-align-center uk-border-rounded'>";
			echo "<h2 class='uk-text-center heroBlack'>TOTAL: Php".$total."<h2>";
			echo "<span><a href='checkout.php'><button type ='button' class='uk-button uk-button-primary uk-text-center uk-border-rounded thiscolor'>Purchase</button></a><span></div></div>";

			echo "</div></div>";




}


require "template.php";





?>