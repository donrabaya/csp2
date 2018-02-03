<?php 

function display_title(){
	echo "Profile Page";
}


function display_content(){

	require 'connection.php';


	if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];


	$sql = "SELECT * FROM accounts WHERE username = '$user'";
	$result	= mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$id = $row['id'];
	$name = $row['name'];
	$lname = $row['last_name'];
	$address = $row['address'];
	$username = $row['username'];
	$email = $row['email'];


	echo '<div class="uk-section uk-section-large profile">
	
    			<div class="uk-container uk-text-center">

			        <div class="uk-panel uk-light uk-margin-medium">
			            <h3>Edit Profile</h3>
			        </div>

			        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
			            <div>
			                <div class="uk-card uk-card-default uk-card-body uk-width-1-2 uk-align-center">';

			                echo "<form action='edituser_endpoint.php?index=$id' method='POST'>";

			                echo "<div class='uk-margin'>
			                    	<input class='uk-input uk-text-center' type='text' name='name' value='$name'>
			                    </div>
			                	<div class='uk-margin'>
			                    	<input class='uk-input uk-text-center' type='text' name='lname' value='$lname'>
			                    </div>
			                	<div class='uk-margin'>
			                    	<input class='uk-input uk-text-center' type='text' name='email' value='$email'>
			                    </div>
			                	<div class='uk-margin'>
			                    	<input class='uk-input uk-text-center' type='text' name='address' value='$address'>
			                    </div>
			                	<div class='uk-margin'>";

			                echo "<a href='userprofile.php'><input type='button' class='uk-button uk-button-primary uk-margin-right' value='BACK'></a>";
			                echo "<input type='submit' class='uk-button uk-button-primary' value='SAVE'></div></form>";

			                echo '</div>
			                </div>
			            </div>
			        </div>

		    	</div>
		
		</div>';
	}

}


require "template.php";


?>