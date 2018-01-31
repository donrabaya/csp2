<?php 

echo '<div class"uk-section-large uk-section"><div class="uk-position-relative">
		<div class="uk-inline">
    	<img  class="imgHeight" src="assets/images/back2.jpg" alt="">
    		<div class="uk-position-center uk-overlay uk-text-center">
    		<h2 class="heroWhite">Hey, welcome to the station!</h2>
    			<div class="uk-card-body uk-card-secondary uk-border-rounded uk-padding-medium uk-align-center form">
							<form action="register_endpoint.php" method="POST">
								<div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input class="uk-input" type="text" name="name" placeholder="Name" required>
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon="icon: user"></span>
							            <input class="uk-input" type="text" id="username" name="username" placeholder="Username" required>
							        </div>
							    </div>
								<div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input id="email1" class="uk-input" type="text" name="email" placeholder="Email" onblur="isValid();" required>
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							            <input id="password1" class="uk-input" type="password" name="password" placeholder="Password" onblur="isValid();" required>
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon=""></span>
							            <input id="password2"class="uk-input" type="password" placeholder="Confirm Password" onkeyup="isValid();" required>
							        </div>
							    </div>
							    <div id="loginerror"> </div>
							    <br>
							    <button type="submit" name="submit" class="uk-button uk-button-default" id="continue" disabled>Register</button>
							</form>
						</div>
		    		</div>
    			 </div>
    		</div>
    		</div>';

function display_title(){
	echo "Registration Page";
}

function display_content(){
	echo "";
}

require "template.php"

?>