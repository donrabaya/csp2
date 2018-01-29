<?php 

echo '<div class="uk-position-relative">
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
                						<h2 class="uk-heading-primary uk-margin-remove-vertical heroWhite">STAY ON TRACK</h2>
                						<p class="heroWhite">LEAD. CAPTURE. TREND.</p>
                					</span>
                				</div>
                		</div>
                	</div>
                </span>
            </div>
    	</div>';

function display_title(){
	echo "Home Page";
};

function display_content(){
	echo '
		<div id="brand" class="uk-section uk-section-default">
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
    			<div class="uk-width-expand@m uk-flex-first@l">
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
    			<div class="uk-width-expand@m uk-flex-first@s uk-flex-first@m uk-flex-last@l">
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
    				<div class="uk-width-expand@m uk-flex-first@l">
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
    		<div class="uk-child-width-1-3@m uk-text-center" uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true; delay: 200">
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
    <div id="services" class="uk-section uk-section-default">
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
    <div id="team" class="uk-section uk-section-muted">
    	<div class="uk-container">
    		<div class="uk-text-center">
    			<h3>OUR TEAM</h3>
    		</div>
    		<div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-right; target: > div > .uk-card; delay: 200; repeat: true" uk-height-match="target: > div > .uk-card; row: false">
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
			        <div class="uk-card uk-card-default uk-card-body">
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


	';
};

require "template.php";


?>