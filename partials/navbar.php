<?php 

if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}

?>


<div class="uk-position-top uk-visible@m">
	    	<nav class="uk-navbar-container uk-navbar height uk-navbar-transparent" uk-navbar>
	    		<div class="uk-navbar-left">
        			<div class="uk-container">
        				<ul class="uk-navbar-nav uk-flex-middle">
            				<!-- <li><a class="uk-logo moon"><img src="assets/images/grav.sv"></a></li> -->
            				<li class="heroWhite">TIME STATION</li>
            			</ul>
        			</div>
            	</div>
	            <div class="uk-navbar-center">
	                <ul class="uk-navbar-nav">
	                    <li class="heroBlack"><a href="home.php" class="heroWhite bottom">HOME</a></li>
	                    <li><a href="shop.php" class="heroWhite">SHOP</a>
	                    </li>
	                    <li>
	                        <a href="#brand" class="heroWhite" uk-scroll>BRANDS</a>
	                    </li>
	                    <li>
	                        <a href="#services" class="heroWhite" uk-scroll>SERVICES</a>
	                    </li>
	                    <li>
	                        <a href="#team" class="heroWhite" uk-scroll>OUR TEAM</a>
	                    </li>
	                </ul>
	            </div>
	            <div class="uk-navbar-right">
	            	<ul class="uk-navbar-nav">
	            		<?php 
	            		if (isset($_SESSION['username']) && $_SESSION['type_id'] == '2') {
	            			echo "<li><a href='#' class='heroWhite'>Hi, ".$username.".</a></li>";
	            			echo "<li><a href='orders.php' class='heroWhite'>ORDERS</a></li>";
	            			echo "<li class='uk-active'><a href='logout.php'><button class='uk-button uk-button-default tm-button-default heroWhite uk-border-rounded'>LOGOUT</button></a></li>";
	            		} else if (isset($_SESSION['username'])) {
	            			echo "<li><a href='#' class='heroWhite'>Hi, ".$username.".</a></li>";
	            			echo "<li><a href='userprofile.php' class='heroWhite'>Profile</a></li>";
	            			echo "<li class='uk-active'><a href='logout.php'><button class='uk-button uk-button-default tm-button-default heroWhite uk-border-rounded'>LOGOUT</button></a></li>";
	            		} else {
	            			echo '<li class="uk-active"><a href="login.php"><button class="uk-button uk-button-default tm-button-default heroWhite uk-border-rounded">LOGIN</button></a></li>';
	            			echo '<li class="uk-active"><a href="register.php"><button class="uk-button uk-button-default tm-button-default heroWhite uk-border-rounded">REGISTER</button></a></li>';
	            		}
	            		?>
	            	</ul>
	            </div>
	        </nav>
	     </div>

    	<!-- Mobile Nav -->
    	
    	<div class="uk-position-top uk-hidden@m">
			<nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent">
			    <div class="uk-navbar-right">
			        <a class="uk-navbar-toggle main-item menu" href="#" uk-toggle="target: #offcanvas-nav">
			           <!--  <span class="heroWhite" uk-icon="icon: menu" uk-toggle="target: #offcanvas-nav"></span> -->
			           		<span class="line line1"></span>
			           		<span class="line line2"></span>
			           		<span class="line line3"></span>
			        </a>
			    </div>
			</nav>
			<div class="uk-offcanvas-content">
			    <div id="offcanvas-nav" uk-offcanvas>
			        <div class="uk-offcanvas-bar">
			            <ul class="uk-nav uk-nav-default">
			            	<div class="uk-text-center">
			            		<li><a class="uk-logo"><img src="assets/images/gravblack.svg" class="moon1 uk-text-center"></a></li>
			            	</div>
			            	<?php 
			            	if (isset($_SESSION['username'])) {
			            		echo "<li><a href='#' class='heroBlack'>Hi, ".$username.".</a></li>";
			            	} else {

			            	}
			            	?>
			                <li class="uk-active"><a href="home.php" class="heroBlack">Home</a></li>
			                <li class="uk-parent"><a href="shop.php" class="heroBlack">Shop</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Our Team</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Services</a></li>

			                <?php 
		            		if (isset($_SESSION['username'])) {
		            			echo "<li class='uk-parent'><a href='logout.php' class='heroBlack'>Logout</a></li>";
		            		} else {
		            			echo '<li class="uk-parent"><a href="login.php" class="heroBlack">Login</a></li>';
		            			echo '<li class="uk-parent"><a href="register.php" class="heroBlack">Register</a></li>';
		            		}
		            		?>
			            </ul>

			        </div>
			    </div>
			</div>
		</div>
	</div>