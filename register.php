<?php 


function display_title(){
	echo "Registration Page";
}

function display_content(){
	echo '

				<div class="uk-section uk-section-large profile">
			
    			<div class="uk-container uk-text-center">

    			<div class="uk-panel uk-light uk-margin-medium">
    			<img class="badge" src="assets/images/loginbadge.svg">
    			<h1 class="heroWhite uk-margin-small-top">Hey, welcome to the station!</h1>
    			</div>

    			 <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
			            <div>

    			<div class="uk-card-body uk-card-secondary uk-border-rounded uk-padding-medium uk-align-center uk-width-1-1 uk-width-1-3@l uk-border-rounded">
							<form action="register_endpoint.php" method="POST" class="uk-grid-small" uk-grid>
								 <div class="uk-width-1-2@s">
								 	<div class="uk-inline">
								 	 <span class="uk-form-icon" uk-icon=""></span>
	       							<input class="uk-input uk-border-rounded" type="text" name="name" placeholder="First Name" required>
	       							</div>
	    						</div>

	    						<div class="uk-width-1-2@s">
	    							<div class="uk-inline">
	    							 <span class="uk-form-icon" uk-icon=""></span>
	        						<input class="uk-input uk-border-rounded" type="text" name="lname" placeholder="Last Name" required>
	        						</div>
	   							</div>


							    <div class="uk-margin uk-width-1-2@s">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input class="uk-input uk-border-rounded" type="text" id="username" name="username" placeholder="Username" required>
							        </div>
							    </div>

								<div class="uk-margin uk-width-1-2@s">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input id="email1" class="uk-input uk-border-rounded" type="text" name="email" placeholder="Email" onblur="isValid();" required>
							        </div>
							    </div>

								<div class="uk-margin-remove-top uk-margin-remove-bottom uk-width-1-1@s displayNone">
							        <div class="uk-inline">
							            
							            <input class="uk-input uk-width-large uk-text-center uk-padding-remove uk-border-rounded" type="text" name="address" placeholder="Address" required>
							        </div>
							    </div>

								  <div id="displayBlock1" class="uk-margin uk-width-1-2@s displayBlock">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon=""></span>
							            <input class="uk-input uk-border-rounded" type="text" name="address" placeholder="Address" onblur="isValid();" required>
							        </div>
							    </div>

							    <div class="uk-margin uk-width-1-2@s">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon=""></span>
							            <input id="password1" class="uk-input uk-border-rounded" type="password" name="password" placeholder="Password" onblur="isValid();" required>
							        </div>
							    </div>

							    <div class="uk-margin uk-width-1-2@s">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon=""></span>
							            <input id="password2"class="uk-input uk-border-rounded" type="password" placeholder="Confirm Password" onkeyup="isValid();" required>
							        </div>
							    </div>

							    <div class="uk-margin uk-width-1-1@s">
							         <div id="loginerror"></div>
							          <button type="submit" name="submit" class="uk-button uk-button-default uk-border-rounded" id="continue" disabled>Register</button>							        
							    </div>
					
							
							</form>
						</div>
						</div>
						</div>


	</div>
	</div>';
}

require "template.php"

?>

