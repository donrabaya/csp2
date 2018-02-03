<?php 

// Hero Header

echo '<div class="uk-position-relative">
		<div class="uk-inline uk-overflow-hidden">
    	<img  class="imgHeight" src="assets/images/shopback.jpg" alt="" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
    	   <div class="uk-position-center uk-overlay uk-text-center">
    	   		<br>
    	   		<a class="uk-logo"><img class="moon1" src="assets/images/grav.svg"></a>
    	  		<br class="displayNone"><br class="displayNone">
    			<h1 class="heroWhite">The most trusted online watch shop in the web</h1>
            	<div class="heroWhite"><h2 class="heroWhite">High-end products to help you set the
  					<span style="color: yellow;" class="bold">trend.</span>
				</h2>
				</div>
				<br class="displayNone"><br class="displayNone">
            	<h5 class="heroWhite">Explore the station now.</h5><br class="displayNone"><br class="displayNone"><br class="displayNone">
            	<div class="arrow bounce"><span class="uk-margin-small-right heroWhite" uk-icon="icon: chevron-down; ratio: 2"></span></div>
				</div>
           </div>
    	</div>';

function display_title(){
	echo "Home Page";
};

function display_content(){
	echo '
		<div id="brand" class="uk-section uk-section-default uk-margin-top">
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
	</div> <!-- End of section 1 -->

	<!-- SECTION 2 -->
    <div class="uk-section uk-section-muted uk-margin-remove-top">
    	<div class="uk-container uk-text-center">
    			<div class="uk-container uk-container-small uk-text-center" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: > .setPink > .hrColor; delay: 500; repeat: true">
    				<div class="uk-grid uk-grid-stack uk-text-center">
	    		</div>   			
    		</div>

			<div class="uk-text-center">			
		    		<h3 class="setPink">Top of the line products</h3>
		    		<div class="uk-divider-small uk-scrollspy-inview uk-animation-slide-bottom-medium hrColor"></div>
		    		<p>100% authentic products of different styles, ranging from casual, luxury and smart watches.</p>
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
    					<h3 class="uk-text-center setPink2">Lead The Team</h3>
    					<p>Bring your A game and feel the power towards your peers, a collection of affordable luxury watches are up for grabs.</p>
    				</div>
    			</div>
    		</div>

    		<div class="uk-flex-middle uk-flex-center uk-grid-margin uk-grid" uk-grid>
    			<div class="uk-width-expand@m uk-flex-first@s uk-flex-last@m uk-flex-last@l">
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
    					<h3 class="uk-text-center setPink2">Style It Out</h3>
    					<p>Street fashion, Sunday vibe, impromptu parties? We got you covered with our wide array of casual watches.</p>
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
    					<h3 class="uk-text-center setPink2">Travel Companion</h3>
    					<p>What better way to explore different time zones with a mind on your wrist, dive into our vault of smart watches and see the magic before your own eyes.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> <!-- End of 2nd Section -->
      
    <!-- SECTION 3 -->
    <div class="uk-section uk-section-">
    	<div class="uk-container" >
    		<div class="uk-text-center">
    			<h3 class="setPink uk-flex-middle">Trending</h3>
    			<hr class="uk-divider-small">
    		</div>
    		<div class="uk-child-width-1-3@m uk-text-center" uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true; delay: 200">
    			<div>
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch1.jpeg" class="uk-border-rounded imgSize">
			        	<h3>Apple Watch</h3>
			        	<a href="shop.php"><button class="uk-button uk-button-default" href="shop.php"><p class="setPink uk-margin-remove-bottom">Shop Here</p></button></a>
			        	<p>No doubt the most trendiest smart watch brand to date.</p>
		        	</div>
		        </div>
		        <div>			 
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch3.jpeg" class="uk-border-rounded imgSize">
			        	<h3>Nixon</h3>
			        	<a href="shop.php"><button class="uk-button uk-button-default" href="shop.php"><p class="setPink uk-margin-remove-bottom">Shop Here</p></button></a>
			        	<p>The brand of the youth lifestyle market, affordable and funky.</p>			   
		        	</div>
		        </div>
		        <div>		 
		        	<div class="uk-card-small uk-card uk-card-default uk-card-body uk-text-center ">		        		
			        	<img src="assets/images/herowatch2.jpeg" class="uk-border-rounded imgSize">
			        	<h3>Tag Heuer</h3>
			        	<a href="shop.php"><button class="uk-button uk-button-default"><p class="setPink uk-margin-remove-bottom">Shop Here</p></button></a>
			        	<p>Make heads turn and stay classy and sassy with Tag Heuer.</p>
		        	</div>
		        </div>
			</div>
       	</div>
    </div> <!-- End of section 3 -->
	
	<!-- SECTION 4 -->
    <div id="services" class="uk-section uk-section-muted">
    	<div class="uk-container">
    		<div class="uk-child-width-expand@m uk-text-center uk-flex-middle" uk-grid uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true">
    			<div>
	    			<div class="uk-panel uk-card-large uk-card uk-card-default uk-card-body uk-text-left">
	    				<p class="setPink">Products</p>
	            		<h2 class="uk-card-title">High quality watches at the most competitive prices</h2>
	            		<p>We showcase a collection of casual, luxury and smart watches. Offered to you on the most competitive price in the web. Our brands ranges from Apple, Seiko, Omega and Luminox to name a few. Custom brand or models will be available upon request. Register now and explore your options with us!</p>
	        		</div>
        		</div>
        		<div>
        			<div class="uk-child-width-1-2@s uk-grid-match uk-text-left" uk-grid uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; repeat: true">
					    <div>
					        <div class="uk-card uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: bolt"></span>
					            <h3 class="uk-card-title">Top of the line</h3>
					            <p>We are allergic to fake items, this page can only accommodate those of high quality.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card  uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: grid"></span>
					            <h3 class="uk-card-title">Choices</h3>
					            <p>Browse our shop now. Warning, high risk of feeling like a kid in a candy store.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card  uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: credit-card"></span>
					            <h3 class="uk-card-title">Money Back</h3>
					            <p>If product satisfaction is under-par, wed be happy to work around a way to makes both parties hit the boogie.</p>
					        </div>
					    </div>
					    <div>
					        <div class="uk-card uk-card-hover uk-card-body uk-margin-remove uk-padding-small">
					        	<span uk-icon="icon: lifesaver"></span>
					            <h3 class="uk-card-title">Free Shipping</h3>
					            <p>Wherever you are our shipping is free. Do you feel the love?</p>
					        </div>
					    </div>
					</div>
        		</div>
    		</div>

    	</div>
    </div> 	<!-- end of section 4 -->

    <!-- SECTION 5 -->
    <div class="uk-section uk-section-default">
    	<div class="uk-container">
    		<div class="uk-text-center">
    			<h3 class="setPink">OUR TEAM</h3>
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
			        	<h3>Kris Aquino</h3>
			        	<p>HR Manager</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-height-large uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle senior">
			        	<h3 class="heroWhite trans">Senior Team</h3>
			        </div>
			    </div>
			</div>   
    		<div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-left; target: > div > .uk-card; delay: 200; repeat: true" uk-height-match="target: > div > .uk-card; row: false">
			    <div>
			        <div class="junior uk-height-large uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle">
			        	<h3 class="heroWhite trans">Junior Team</h3>
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
			        	<h3>Agot Isidro</h3>
			        	<p>Social Media Manager</p>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-body">
			        	<img src="assets/images/team6.png" class="uk-border-rounded">
			        	<h3>Sandara Park</h3>
			        	<p>Language Translator</p>
			        </div>
			    </div>
			</div>   		
    	</div>    	
    </div> <!-- End of section 5 -->


	';
};

require "template.php";


?>





