<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Capstone 2</title>

	<!-- uikit CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/uikit.min.css"/>
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- uikit JS -->
	<script type="text/javascript" src="assets/js/uikit.min.js"></script>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/css/uikit.min.css" />


</head>
<body>

	<!-- Navigation Bar -->
	<div class="uk-position-relative">
		<div class="uk-inline">
    	<img  src="assets/images/watch3.jpg" alt="">
    	  <div class="uk-position-large uk-position-center-left uk-text-center" id="hero">
                <span>
                	<div class="uk-position-relative">
						<div class="uk-inline">
                			<img src="assets/images/back.png">
                				<div class="uk-position-center">
                					<span>
                						<p class="heroWhite">HIGH QUALITY WATCHES</p>
                						<h2 class="uk-heading-primary uk-margin-remove-vertical heroBlack">STAY ON TRACK</h2>
                						<p class="heroWhite">LEAD. CAPTURE. TREND.</p>
                					</span>
                				</div>
                		</div>
                	</div>
                </span>
            </div>
    	</div>

    	<!-- Desktop Nav -->
    	<div class="uk-position-top uk-visible@m">
	    	<nav class="uk-navbar-container uk-navbar navColor" uk-navbar>
	    		<div class="uk-navbar-left">
        			<div class="uk-container">
        				<ul class="uk-navbar-nav uk-flex-middle">
            				<li><a class="uk-logo moon"><img src="assets/images/grav.svg"></a></li>
            				<li class="heroWhite">TIME STATION</li>
            			</ul>
        			</div>
            	</div>
	            <div class="uk-navbar-center">
	                <ul class="uk-navbar-nav">
	                    <li class="heroBlack"><a href="#" class="heroWhite bottom">HOME</a></li>
	                    <li><a href="#" class="heroWhite">SHOP</a>
	                    </li>
	                    <li>
	                        <a href="#" class="heroWhite">BRANDS</a>
	                    </li>
	                    <li>
	                        <a href="#" class="heroWhite">SERVICES</a>
	                    </li>
	                    <li>
	                        <a href="#" class="heroWhite">OUR TEAM</a>
	                    </li>
	                </ul>
	            </div>
	            <div class="uk-navbar-right">
	            	<ul class="uk-navbar-nav">
	            		<li class="uk-active"><a href="#"><button class="uk-button uk-button-default tm-button-default heroWhite uk-border-rounded">LOGIN / REGISTER</button></a></li>
	            	</ul>
	            </div>
	        </nav>
	     </div>

    	<!-- Mobile Nav -->
    	<div class="uk-position-top uk-hidden@m">
			<nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent">
			    <div class="uk-navbar-left">
			        <a class="uk-navbar-toggle" href="#">
			            <span class="heroBlack" uk-icon="icon: menu" uk-toggle="target: #offcanvas-nav"></span>
			        </a>
			    </div>
			</nav>
			<div class="uk-offcanvas-content">
			    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
			        <div class="uk-offcanvas-bar">
			            <ul class="uk-nav uk-nav-default">
			            	<div class="uk-text-center">
			            		<li><a class="uk-logo"><img src="assets/images/grav.svg" class="moon1 uk-text-center"></a></li>
			            	</div>
			                <li class="uk-active"><a href="#" class="heroBlack">Home</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Shop</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Our Team</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Services</a></li>
			                <li class="uk-parent"><a href="#" class="heroBlack">Login</a></li>
			            </ul>

			        </div>
			    </div>
			</div>
		</div>
	</div>

    <!-- Body -->
    <!-- SECTION 1 -->
    <div class="uk-section uk-section-default">
	    <div class="uk-container uk-container-small">
	    	<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle">Your Options</h3>
	    		<hr class="uk-divider-small">
	    	</div>
	    	<div>
			    <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large">
				        <li>
				            <img class="uk-flex-middle" src="assets/images/logo1.png" alt="">   
				        </li>
				        <li>
				            <img src="assets/images/logo2.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo3.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo4.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo5.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo6.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo7.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo8.png" alt="">
				        </li>
				        <li>
				            <img src="assets/images/logo9.png" alt="">
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div> <!-- End of section 2 -->

	<!-- SECTION 2 -->
    <div class="uk-section uk-section-muted uk-margin-remove-top">
    	<div class="uk-container uk-text-center">
    			<div class="uk-container uk-container-small">
    				<div class="uk-grid uk-grid-stack" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: > .setPink > .hrColor; delay: 500; repeat: true">
		    		<div>			
			    		<h3 class="setPink">Top of the line products</h3>
			    		<div class="uk-divider-small uk-scrollspy-inview uk-animation-slide-bottom-medium hrColor"></div>
			    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    		</div> 
	    		</div>   			
    		</div>

    		<div class="uk-flex-middle uk-flex-center uk-grid-margin uk-grid" uk-grid>
    			<div class="uk-width-expand@m uk-flex-first@l uk-flex-last@s">
    				<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
    					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
    						<img src="assets/images/watch5.jpeg" class="uk-border-rounded">
    						<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                			<span class="uk-transition-fade" uk-icon="icon: hashtag; ratio: 2"></span>
                			</div>
    					</div>
    				</div> 				
    			</div>
    			<div class="uk-width-expand@m uk-float-left">
   					<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
    					<h3 class="uk-text-center setPink">Lead The Team</h3>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    					tempor incididunt ut labore et dolore magna aliqua. </p>
    				</div>
    			</div>
    		</div>

    		<div class="uk-flex-middle uk-flex-center uk-grid-margin uk-grid" uk-grid>
    			<div class="uk-width-expand@m uk-flex-first@s uk-flex-last@l">
    				<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
    					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
    						<img src="assets/images/watch8.jpg" class="uk-border-rounded">
    						<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                			<span class="uk-transition-fade" uk-icon="icon: star; ratio: 2"></span>
                			</div>
                		</div>
    				</div> 				
    			</div>
    			<div class="uk-width-expand@m">
    				<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
    					<h3 class="uk-text-center setPink">Style It Out</h3>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    					tempor incididunt ut labore et dolore magna aliqua. </p>
    				</div>
    			</div>
    		</div>

    		<div class="uk-flex-middle uk-flex-center uk-grid-margin uk-grid" uk-grid>
    				<div class="uk-width-expand@m uk-flex-first@l uk-flex-last@s">
    					<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
    						<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
    							<img src="assets/images/watch2.jpg" class="uk-border-rounded">
    							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                				<span class="uk-transition-fade" uk-icon="icon: world; ratio: 2"></span>
    							</div> 				
    						</div>
    					</div>
    				</div>
    			<div class="uk-width-expand@m">
    				<div class="uk-panel" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
    					<h3 class="uk-text-center setPink">Travel Companion</h3>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    					tempor incididunt ut labore et dolore magna aliqua. </p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> <!-- End of 2nd Section -->
      
    <!-- SECTION 3 -->
    <div class="uk-section uk-section-default">
    	<div class="uk-container" >
    		<div class="uk-text-center">
    			<h3 class="setPink uk-flex-middle">Trending</h3>
    			<hr class="uk-divider-small">
    		</div>
    		<div class="uk-child-width-1-3@m uk-text-center" uk-grid uk-grid uk-scrollspy="cls: uk-animation-slide-left; target: > div > .uk-card; repeat: true; delay: 200">
    			<div>
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch1.jpeg" class="uk-border-rounded">
			        	<h3>Seiko</h3>
			        	<button class="uk-button uk-button-default"><p class="setPink uk-margin-remove-bottom">Purchase</p></button>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.</p>
		        	</div>
		        </div>
		        <div>			 
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch2.jpeg" class="uk-border-rounded">
			        	<h3>Hublot</h3>
			        	<button class="uk-button uk-button-default"><p class="setPink uk-margin-remove-bottom">Purchase</p></button>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.</p>
		        	</div>
		        </div>
		        <div>		 
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch3.jpeg" class="uk-border-rounded">
			        	<h3>Luminox</h3>
			        	<button class="uk-button uk-button-default"><p class="setPink uk-margin-remove-bottom">Purchase</p></button>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.</p>
		        	</div>
		        </div>
			</div>
       	</div>
    </div> <!-- End of section 3 -->
    <!-- SECTION 4 -->
     <div class="uk-section uk-section-muted" uk-scrollspy="cls:uk-animation-fade; repeat: true;">    	
	    <div class="uk-container uk-container-small uk-text-center">
		    <div uk-countdown="date: 2018-01-31T09:00:56+00:00">
		    <h3 class="setPink">COUNTDOWN TO NEXT SALE</h3>
		    <hr class="uk-divider-small"><br>
		    <span class="uk-countdown-number uk-countdown-days"></span>
		    <span class="uk-countdown-separator">:</span>
		    <span class="uk-countdown-number uk-countdown-hours"></span>
		    <span class="uk-countdown-separator">:</span>
		    <span class="uk-countdown-number uk-countdown-minutes"></span>
		    <span class="uk-countdown-separator">:</span>
		    <span class="uk-countdown-number uk-countdown-seconds"></span>
			</div>
	    </div>
	</div> <!-- end of section 4 -->
	
	<!-- SECTION 5 -->
    <div class="uk-section uk-section-default">
    	<div class="uk-container">
    		<div class="uk-child-width-expand@m uk-text-center uk-flex-middle" uk-grid uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true">
    			<div>
	    			<div class="uk-panel uk-card-large uk-card uk-card-default uk-card-body uk-text-left">
	    				<p class="setPink">Products</p>
	            		<h2 class="uk-card-title">High quality watches at the most competitive prices</h2>
	            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        		</div>
        		</div>
        		<div>
        			<div class="uk-child-width-1-2@s uk-grid-match uk-text-left" uk-grid uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true">
					    <div>
					        <div class="uk-card uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: bolt"></span>
					            <h3 class="uk-card-title">Top of the line</h3>
					            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card  uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: grid"></span>
					            <h3 class="uk-card-title">Choices</h3>
					            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card  uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: credit-card"></span>
					            <h3 class="uk-card-title">Money Back</h3>
					            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: lifesaver"></span>
					            <h3 class="uk-card-title">Free Shipping</h3>
					            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
					    </div>
					</div>
        		</div>
    		</div>

    	</div>
    </div> 	<!-- end of section 5 -->

    <!-- SECTION 6 -->
    <div class="uk-section uk-section-muted">
    	<div class="uk-container">
    		<div class="uk-text-center">
    			<h3>OUR TEAM</h3>
    		</div>
    		<div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-right; target: > div > .uk-card; delay: 200; repeat: true" uk-grid uk-height-match="target: > div > .uk-card; row: false">
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team1.png" class="uk-border-rounded">
			        	<h3>Katrina Halili</h3>
			        	<p>Web Designer</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team2.png" class="uk-border-rounded">
			        	<h3>Noli Decastro</h3>
			        	<p>UX Designer</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team3.png" class="uk-border-rounded">
			        	<h3>Monet Cockaliong</h3>
			        	<p>HR Manager</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body" uk-height-match="target: > div > .uk-card">
			        	<h3>Senior Team</h3>
			        </div>
			    </div>
			</div>   
    		<div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-left; target: > div > .uk-card; delay: 200; repeat: true" uk-height-match="target: > div > .uk-card; row: false">
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<h3>Junior Team</h3>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team4.png" class="uk-border-rounded">
			        	<h3>John Lapus</h3>
			        	<p>Content Manager</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team5.png" class="uk-border-rounded">
			        	<h3>Ski Averilla</h3>
			        	<p>Social Media Manager</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team6.png" class="uk-border-rounded">
			        	<h3>Chun Li</h3>
			        	<p>Language Translator</p>
			        </div>
			    </div>
			</div>   		
    	</div>    	
    </div> <!-- End of section 6 -->

    <div class="uk-section uk-section-muted">
		<div class="uk-container">
			<div class="uk-text-center">
				<div class="uk-child-width-1-2@m uk-text-center uk-grid-large" uk-grid uk-height-match="target: > div > .uk-card; row: false">
					<div>
						<div class="uk-card-body uk-margin-xlarge-left uk-card-secondary">
							<h3 class="uk-text-center">Welcome back!</h3>
							<form>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon="icon: user"></span>
							            <input class="uk-input" type="text">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							            <input class="uk-input" type="text">
							        </div>
							    </div>
							     <button class="uk-button uk-button-default">Continue</button>
							</form>
						</div>
					</div>
					<div>
						<div class="uk-card-body uk-card uk-margin-xlarge-right uk-card-secondary">
							<h3 class="uk-text-center">Register Here</h3>
							<form>
								<div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input class="uk-input" type="text" placeholder="Email">
							        </div>
							    </div>
								<div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon=""></span>
							            <input class="uk-input" type="text" placeholder="Name">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon" uk-icon="icon: user"></span>
							            <input class="uk-input" type="text" placeholder="Username">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							            <input class="uk-input" type="text" placeholder="Password">
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-inline">
							            <span class="uk-form-icon uk-form-icon-flip" uk-icon=""></span>
							            <input class="uk-input" type="text" placeholder="Confirm Password">
							        </div>
							    </div>
							    <button class="uk-button uk-button-default">Continue</button>
							</form>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<div class="uk-section uk-section-muted">
	    <div class="uk-container uk-container-small">
	    	<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle">Most Popular</h3>
	    		<hr class="uk-divider-small">
	    	</div>
	    	<div>
			    <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large uk-text-center">
				        <li>
				            <img src="assets/images/smart1.jpg" alt="">
				            <h2>Fitbit</h2>
				            <p>Ionic</p>
				        </li>
				        <li>
				            <img src="assets/images/smart2.jpg" alt="">
				            <h2>Luminox</h2>
				            <p>Soldier</p>
				        </li>
				        <li>
				            <img src="assets/images/smart3.jpg" alt="">
				            <h2>Omega</h2>
				            <p>Prestige</p>
				        </li>
				        <li>
				            <img src="assets/images/smart4.jpg" alt="">
				            <h2>Garmin</h2>
				            <p>Forerunner</p>
				        </li>
				        <li>
				            <img src="assets/images/smart5.jpg" alt="">
				            <h2>Tissot</h2>
				            <p>Caveman</p>
				        </li>
				        <li>
				            <img src="assets/images/smart6.jpg" alt="">
				            <h2>Rolex</h2>
				            <p>Padeguire</p>
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div> <!-- End of section 2 -->
	<div class="uk-section uk-section-default">
	    <div class="uk-container uk-container-small">
	    	<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle">Your Options</h3>
	    		<hr class="uk-divider-small">
	    	</div>
	    	<div>
			    <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large">
				        <li>
				            <img src="assets/images/casual1.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/casual2.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/casual3.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/casual4.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/casual5.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/casual6.jpg" alt="">
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div> <!-- End of section 2 -->
	<div class="uk-section uk-section-default">
	    <div class="uk-container uk-container-small">
	    	<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle">Your Options</h3>
	    		<hr class="uk-divider-small">
	    	</div>
	    	<div>
			    <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large">
				        <li>
				            <img src="assets/images/luxury1.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/luxury2.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/luxury3.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/luxury4.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/luxury5.jpg" alt="">
				        </li>
				        <li>
				            <img src="assets/images/luxury6.jpg" alt="">
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div> <!-- End of section 2 -->

	<div class="uk-section uk-section-large uk-section-default uk-padding-remove-bottom uk-border-rounded">
		<div class="uk-container-large uk-container uk-margin-xlarge-left uk-margin-xlarge-right">
			<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="width: 200; min-height: 100; max-height: 500;animation: push; autoplay: true; autoplay-interval: 4000">
			    <ul class="uk-slideshow-items">
			        <li>
			            <img src="assets/images/slider1.jpg" alt="" uk-cover>
			            <div class="uk-position-center uk-position-small uk-text-center">
			                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
			                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
			            </div>
			        </li>
			        <li>
			            <img src="assets/images/slider2.jpg" alt="" uk-cover>
			            <div class="uk-position-center uk-position-small uk-text-center">
			                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
			                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
			            </div>
			        </li>
			        <li>
			            <img src="assets/images/slider3.jpg" alt="" uk-cover>
			            <div class="uk-position-center uk-position-small uk-text-center">
			                <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
			                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
			            </div>
			        </li>
			    </ul>

			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
			</div>
		</div>	
	</div>

	<div class="uk-section-default uk-section-large uk-padding-large uk-padding-remove-bottom">
		<div class="uk-container uk-flex-middle">
			<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle uk-align-center">The Collection</h3>
	    		<hr class="uk-divider-small">
				<button class="uk-button uk-button-default uk-align-left" type="button">Hover</button>
			<div uk-dropdown>
			    <ul class="uk-nav uk-dropdown-nav">
			        <li class="uk-active"><a href="#">ALL</a></li>
			        <li class="uk-nav-header"><a href="#">Smart Watch</a></li>
			        <li class="uk-nav-header"><a href="#">Casual</a></li>
			        <li class="uk-nav-header"><a href="#">Luxury</a></li>
			    </ul>
			</div>
	    	</div>	
		</div>

	</div>

	<div class="uk-section uk-section-default uk-padding-remove-top uk-padding-large">
		<div class="uk-container uk-margin-remove-top">
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart1.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Garmin</h3>
			            <p>Fenix 5S Carrara White</p>
			            <p>P36950</p>
			            <button class="uk-button uk-button-default">Purchase</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury1.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Omega</h3>
			            <p>Seamaster Planet Ocean</p>
			            <p>P85000</p>
			            <button class="uk-button uk-button-default">Purchase</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual1.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Tissot</h3>
			            <p>PRS 516 Chrongraph</p>
			            <p>P9500</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart2.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Fitbit</h3>
			            <p>Ionic</p>
			            <p>P18500</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury2.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Hublot</h3>
			            <p>Classic Fusion 38mm</p>
			            <p>P55000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual2.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Luminox</h3>
			            <p>Recon Pointman 8820</p>
			            <p>P15500</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart3.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Suunto</h3>
			            <p>Spartan Ultra Black HR</p>
			            <p>P31000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury3.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Rolex</h3>
			            <p>Submariner Steel</p>
			            <p>P80000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual3.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Seiko</h3>
			            <p>Sky Solar</p>
			            <p>P7000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart4.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Apple Watch</h3>
			            <p>Nike GPS 42mm</p>
			            <p>P22000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury4.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Breitling</h3>
			            <p>Superocean</p>
			            <p>P75000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual4.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Nixon</h3>
			            <p>Sentry Browned Out</p>
			            <p>P6000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart5.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Nixon</h3>
			            <p>GPL Mission</p>
			            <p>P25000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury5.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Brietling</h3>
			            <p>Chronomat GMT</p>
			            <p>P69000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual5.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Nixon</h3>
			            <p>Sentry Classic 52</p>
			            <p>P7000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
			<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/smart6.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Moto</h3>
			            <p>360 Sport 45mm</p>
			            <p>P5000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/luxury6.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Rolex</h3>
			            <p>GMT Master II</p>
			            <p>P90000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/casual6.jpg" width="80" height="80">
			            <h3 class="uk-card-title">Luminox</h3>
			            <p>SET Scott Cassel</p>
			            <p>P9000</p>
			            <button class="uk-button uk-button-default">Button</button>
			        </div>
			    </div>
			</div>
		</div>
	</div>

    <!-- Footer -->
    <div class="uk-section uk-section-secondary uk-light uk-padding-remove-top">
    	<div class="uk-container">
    		<div uk-grid>
    			<div class="uk-width-expand@m uk-text-center uk-padding-remove">
    				<a href="#" uk-totop uk-scroll></a>    				
    			</div>
    		</div>
    		<div class="uk-grid uk-text-left" uk-grid>
    			<div class="uk-width-expand@m uk-width-1-2@s uk-first-column">
   	    			<h3>TIME</h3>
	    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    			tempor incididunt ut labore et dolore magna aliqua. </p>
    			</div>
    			<div class="uk-width-expand@m uk-width-1-2@s uk-first-column">
   	    			<h3>Products</h3>
	    			<ul class="uk-list">
	    				<li>
	    					<a href="#">Seiko</a>
	    				</li>
	    				<li>
	    					<a href="#">Hublot</a>
	    				</li>
	    				<li>
	    					<a href="#">Rolex</a>
	    				</li>
	    			</ul>
    			</div>
    			<div class="uk-width-expand@m uk-width-1-2@s uk-first-column">
   	    			<h3>Company</h3>
	    			<ul class="uk-list">
	    				<li>
	    					<a href="#">The Team</a>
	    				</li>
	    				<li>
	    					<a href="#">News</a>
	    				</li>
	    				<li>
	    					<a href="#">Pricing</a>
	    				</li>
	    			</ul>
    			</div>
    			<div class="uk-width-expand@m uk-width-1-2@s uk-first-column">
   	    			<h3>Contact Us</h3>
	    			<p>fedriccorabaya@gmail.com</p>
	    			<a href="" uk-icon="icon: github"></a>
	    			<a href="" uk-icon="icon: twitter"></a>
	    			<a href="" uk-icon="icon: instagram"></a>
	    			<br>
    			</div>
    		</div>
		</div>
	</div> <!-- END OF FOOTER -->

	<!-- JavaScript -->
	<!-- UIkit JS -->
	<script src="assets/js/uikit-icons.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>