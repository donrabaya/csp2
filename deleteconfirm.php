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
			
    			<div class="uk-container">

			        <div class="uk-panel uk-light uk-margin-medium uk-text-center">
			            <h1>Your Profile</h1>
			        </div>

			        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
			            <div>
			                <div class="uk-card uk-card-default uk-card-body uk-width-1-2 uk-align-center uk-border-rounded">
			                	<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>Username:</div>
									<div>'.$user.'</div>
								</div>
			                	<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>First Name:</div>
									<div>'.$name.'</div>
								</div>
			                	<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>Last Name:</div>
									<div>'.$lname.'</div>
								</div>
			                	<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>Address:</div>
									<div>'.$address.'</div>
								</div>
			                	<div class="uk-grid-small" uk-grid>
									<div class="uk-width-expand" uk-leader>Email:</div>
									<div>'.$email.'</div>
								</div>
			                	<div class="uk-margin">';
			                echo '<div class="uk-container uk-text-center">';
			                echo "<div><p>Confrim to delete profile</p></div>";	
			                echo "<a href='userprofile.php?index=$id'><button class='uk-button uk-button-default uk-margin-right'>BACK</button></a>";
			                echo "<a href='deleteuser.php?index=$id'><button class='uk-button uk-button-danger'>DELETE</button></a>";
			                echo '</div></div>
			                <br>

			                </div>
			            </div>
			        </div>

		    	</div>
	
		</div>';
	}

}


require "template.php";


?>
