<?php 


function display_title(){
	echo "Login Page";
};

function display_content(){ 
	echo '
			<div class="uk-section uk-section-large profile vh">
			
    			<div class="uk-container uk-text-center">


    			<div class="uk-panel uk-light uk-margin-medium">
    			<img class="badge uk-margin-remove-top" src="assets/images/loginbadge.svg">
    			<h1 class="heroWhite uk-margin-remove-top">Hey, good to see you again!</h1>
    			<h4 class="heroWhite uk-margin-remove-top">Sign in to get going.</h4>
    		</div>

    			 <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
			            <div>


    			<div class="uk-card-body uk-card-secondary uk-border-rounded uk-width-1-1 uk-width-1-3@l uk-align-center form uk-border-rounded">
							<form method="POST" action="authenticate.php">
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon="icon: user"></span>
							            <input class="uk-input uk-form-width-medium" type="text" name="username">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							            <input class="uk-input uk-form-width-medium" type="password" name="password">
							        </div>
							    </div>
							    <div class="uk-text-center">Username or Password is invalid</div>
							    <br>
							     <button class="uk-button uk-button-default" type="submit" name="submit">LOGIN</button>
							</form>
						</div>

					</div>
					</div>


    			</div>
    			 </div>';

}
require "template.php";

?>