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
			<div class="uk-section uk-section-primary uk-preserve-color uk-text-center">
    			<div class="uk-container">

			        <div class="uk-panel uk-light uk-margin-medium">
			            <h3>Your Profile</h3>
			        </div>

			        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
			            <div>
			                <div class="uk-card uk-card-default uk-card-body uk-width-1-2 uk-align-center">
			                	<div class="uk-margin">
			                    	<p>'.$user.'</p>
			                    </div>
			                	<div class="uk-margin">
			                    	<p>'.$name.'</p>
			                    </div>
			                	<div class="uk-margin">
			                    	<p>'.$lname.'</p>
			                    </div>
			                	<div class="uk-margin">
			                    	<p>'.$address.'</p>
			                    </div>
			                	<div class="uk-margin">
			                    	<p>'.$email.'</p>
			                    </div>
			                	<div class="uk-margin">';	
			                echo "<a href='edituser.php?index=$id'><button class='uk-button uk-button-primary uk-margin-right'>EDIT</button></a>";
			                echo "<a href='deleteuser.php?index=$id'><button class='uk-button uk-button-primary'>DELETE</button></a>";
			                echo '</div>

			                </div>
			            </div>
			        </div>

		    	</div>
			</div>
		</div>';
	}

}


require "template.php";


?>

