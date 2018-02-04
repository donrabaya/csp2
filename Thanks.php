<?php 

function display_title(){
	echo "Login Page";
};

function display_content(){ 
		echo '
			<div class="uk-section uk-section-large profile vh">

    			<div class="uk-container uk-text-center uk-margin-xlarge-top">


    			<div class="uk-panel uk-light uk-margin-medium">
    			<h1 class="heroWhite">Your order has been received!</h1>
    		<h4 class="heroWhite">Thank you very much for shopping with us, see you again soon!</h4>
    		</div>
			            
    

    			</div>
    			 </div>';

}
require "template.php";


?>