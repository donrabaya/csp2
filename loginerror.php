<?php 

function display_title(){
	echo "Login Error";
};

function display_content(){ ?> <div class="uk-section uk-section-muted">
		<div class="uk-container uk-padding-large">
			<div class="uk-text-center">
				<div class="uk-child-width-1-2@m uk-text-center uk-grid-large" uk-grid>
					<div>
						<div class="uk-card-body uk-margin-xlarge-left uk-card-secondary uk-border-rounded uk-padding-small">
							<h3 class="uk-text-center">Welcome back!</h3>
							<form method="POST" action="authenticate.php">
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon="icon: user"></span>
							            <input class="uk-input" type="text" name="username">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							            <input class="uk-input" type="password" name="password">
							        </div>
							    </div>
							    <div class="uk-text-center">Username or Password is invalid</div>
							    <br>
							     <button class="uk-button uk-button-default" type="submit" name="submit">LOGIN</button>
							</form>
						</div>
					</div>
					<div>
						<div class="uk-card-body uk-margin-xlarge-right uk-card-secondary uk-border-rounded uk-padding-small">
							<h3 class="uk-text-center">Register Here</h3>
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
		</div>
	</div>

<?php
}
require "template.php";


?>