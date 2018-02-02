<?php

function display_title(){
	echo "Orders Page";
}

function display_content(){
require 'connection.php';

		echo '<div class="uk-section uk-section-large profile">
				<div class="uk-section uk-section-primary uk-preserve-color uk-text-center">
    				<div class="uk-container">
    					<div class="uk-panel uk-light uk-margin-medium">
			            	<h3>Customer Orders</h3>
			        	</div>
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


			    echo    '<div><div class="uk-card uk-card-default uk-card-body uk-width-1-1">';

			                echo "<form action='edituser_endpoint.php?index=$id' method='POST'>";

			                echo '<div class="uk-margin">
			                    	<p>BUYER: '.$user.'</p>
			                    </div>
			                	<div class="uk-margin">
			                		<p>ITEM: '.$brand.' '.$model.'</p>			               
			                    	<p>PRICE: '.$price.'</p>
			                    </div>
			                	<div class="uk-margin">
			                    	<p>PIECES: '.$quantity.'</p>
			                    </div>
			      
			                	<div class="uk-margin">';

			                echo "<input type='submit' class='uk-button uk-button-primary uk-margin-right' value='PROCESS' disabled>
			                <a href='deleteorder.php?order=$order><button type='button' class='uk-button uk-button-danger' disabled>CANCEL</button></a>
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

require "template.php";
?>
