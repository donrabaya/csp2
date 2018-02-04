<?php

function display_title(){
	echo "Orders Page";
}

function display_content(){
require 'connection.php';

		echo '
				<div class="uk-section uk-section-large profile vh">
			
    			<div class="uk-container uk-text-center">
    				<div class="uk-container">
    					<div class="uk-panel uk-light uk-margin-medium">
			            	<h1>Customer Orders</h1>
			        	</div>
			        	<br>
			        <div class="uk-child-width-1-3@m uk-text-left" uk-grid>
			            ';

		$sql3 = "SELECT * FROM user_orders";
		$result3 = mysqli_query($conn, $sql3);
		while ($row3 = mysqli_fetch_assoc($result3)) {
		$userorder = $row3['account_id'];
		$order = $row3['id'];
		extract($row3);

			$sql1 = "SELECT * FROM orders WHERE user_order_id = '$id'";
			$result1 = mysqli_query($conn,$sql1);
			while ($row1 = mysqli_fetch_assoc($result1)) {
				$item = $row1['shop_id'];
				extract($row1);

				$sql = "SELECT * FROM accounts WHERE id = '$account_id'";
				$result	= mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
				$user = $row['username'];

				$sql2 = "SELECT * FROM shops WHERE id = '$item'";
				$result2 = mysqli_query($conn,$sql2);
				$row2 = mysqli_fetch_assoc($result2);
				extract($row2);


			    echo    '<div><div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-border-rounded">';

			                echo "<form action='edituser_endpoint.php?index=$id' method='POST'>";

			                echo '
		                		<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>BUYER:</div>
									<div>'.$user.'</div>
								</div>
		                		<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>ITEM:</div>
									<div>'.$brand.' '.$model.'</div>
								</div>
		                		<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>PIECES:</div>
									<div>'.$quantity.'</div>
								</div>
		                		<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>TOTAL:</div>
									<div>PHP'.$subtotal.'</div>
								</div>
			                	<div class="uk-margin">';

			                echo "<a href='home.php'><button type='button' class='uk-button uk-button-secondary uk-align-center'>PROCESS</button></a>

			              
			                </div></form>";
			            
			                echo '</div></div>';


		}
	}
					echo '
						</div>
					</div>
		     		</div>
			   </div>
			</div>';
}
 // <a href='deleteorder.php?order=$order><button type='button' class='uk-button uk-button-danger' disabled>CANCEL</button></a>
require "template.php";
?>
