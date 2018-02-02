<?php 

// Hero Header

echo '<div class="uk-position-relative">
		<div class="uk-inline uk-overflow-hidden">
    	<img  class="imgHeight" src="assets/images/back1.jpg" alt="" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
    	   <div class="uk-position-center uk-overlay uk-text-center">
    	   		<a class="uk-logo"><img class="moon1" src="assets/images/grav.svg"></a>
    	  		<br><br>
    			<h1 class="heroWhite">A collection of popular brands just for you.</h1>
            	<div class="heroWhite"><h2 class="heroWhite">Welcome please take the
            		<span style="color: yellow;">lead.</span>
				</h2>
				</div>
            	<h5 class="heroWhite">Browse the shelf.</h5><br><br><br>
            	<div class="arrow bounce"><span class="uk-margin-small-right heroWhite" uk-icon="icon: chevron-down; ratio: 2"></span></div>
				</div>
           </div>
    	</div>';

function display_title(){
	echo "Shop";
};

function display_content(){

	require 'connection.php';
	if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	}

	// Product Slider

	echo '<div class="uk-section uk-section-default uk-margin-top-large">
	    <div class="uk-container uk-container-small">
	    	<div class="uk-margin-large-bottom uk-text-center">
	    		<h3 class="setPink uk-flex-middle">Most Popular</h3>
	    		<hr class="uk-divider-small">
	    	</div>
	    	<div>
			    <div class="uk-position-relative uk-visible-toggle uk-flex-middle" uk-slider="autoplay: true; autoplay-interval: 2000">
				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle uk-grid-large uk-text-center">
				        <li>
				            <img src="assets/images/smart6.jpg" alt="">
				            <h2>Moto</h2>
				            <p>360 Sport 45mm</p>
				        </li>
				        <li>
				            <img src="assets/images/casual5.jpg" alt="">
				            <h2>Nixon</h2>
				            <p>Sentry Browned Out</p>
				        </li>
				        <li>
				            <img src="assets/images/luxury5.jpg" alt="">
				            <h2>Brietling</h2>
				            <p>Chronomat GMT</p>
				        </li>
				        <li>
				            <img src="assets/images/smart4.jpg" alt="">
				            <h2>Apple</h2>
				            <p>Nike GPS 42mm</p>
				        </li>
				        <li>
				            <img src="assets/images/casual6.jpg" alt="">
				            <h2>Luminox</h2>
				            <p>SET Scott Cassel</p>
				        </li>
				        <li>
				            <img src="assets/images/luxury3.jpg" alt="">
				            <h2>Rolex</h2>
				            <p>Submariner Steel Gold</p>
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
	</div> ';


		$filter = isset($_GET['category']) ? $_GET['category'] : 'ALL';

		echo '<div class="uk-section-default uk-section-large uk-padding-large uk-padding-remove-bottom">
			<div class="uk-container uk-flex-middle">
				<div class="uk-margin-large-bottom uk-text-center">
		    		<h3 class="setPink uk-flex-middle uk-align-center">The Collection</h3>
		    		<hr class="uk-divider-small">';

	// Category Filter Button

		echo "<div class='uk-align-left'>
		<div><select class='uk-select uk-form-width-medium filter' name='filter' onchange='filter(this.value)'><option>ALL</option>";


		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$category = $row['category'];
			echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
		}
		echo "</select>";
		echo  "</div>
	        </div>";

	    // Add items(ADMIN) and Cart(USER)

	    if (isset($_SESSION['username']) && $_SESSION['type_id'] == '2') {
			echo "<button class='uk-button uk-button-default uk-align-left' id='add_item' href='#modal-sections' uk-toggle >ADD ITEM</button>";

		} else if (isset($_SESSION['username'])) {

		// Cart Button

			echo "<button class='uk-button uk-button-default uk-align-left' uk-toggle='target: #offcanvas-flip'>CART</button>";	
			echo "<div id='offcanvas-flip' class='cartColor' uk-offcanvas='flip: true; overlay: true'>";
			echo "<div class='uk-offcanvas-bar'>";

		// Cart Content

			$total = 0;
			$subtotal = 0;

			if (isset($_SESSION['username'])) {
				echo "<h2 class='cartColor uk-text-center'>".$username."'s Cart</h2>";
			}

			if (isset($_SESSION['cart'])) {
				
			
			foreach ($_SESSION['cart'] as $index => $quantity) {
					$sql = "SELECT * FROM shops WHERE id='$index'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					extract($row);

					$subtotal = $row['price'] * $quantity;
					$total = $total + $subtotal;

					echo "<div class='uk-card uk-card-default uk-card-body uk-margin cartColor uk-text-center' enctype='multipart/form-data'>";
					echo "<form class='container' method='POST' action='checkout.php?index=$index'>";
					echo "<img src='$image'>";
    				echo "<h3 class='uk-card-title uk-text-center uk-padding-remove'>".$brand."</h3>";
				   	echo "<p class='uk-margin-remove uk-text-center uk-padding-remove'>".$model."</p>";
				    echo "<p class='uk-text-center uk-padding-remove'>Total: P".$subtotal."</p>";
					echo "<input value='$subtotal' name='subtotal' class='total'>";
				    echo "<span class='uk-margin-remove-top uk-text-center' name='quantity'>Quantity: ".$quantity."</span>";
					echo "<input type='number' class='uk-input uk-text-center cartColor uk-padding-remove' name='change_quantity' min=1 value=1>";
					echo "<button id='delete' type='submit' class='uk-button uk-button-secondary uk-text-center'>Quantity</button>";
					// echo "<a href='changequantity.php?index=$index'><button type='button' class='uk-button uk-button-primary'>QUANTITY</button></a>";	
					echo "<a href='deletecart.php?index=$index'><button type='button' class='uk-button uk-button-secondary'>Remove</button></a></div>";
					echo "</form>";						
			}	
				}

			echo "<div class='uk-card-default uk-padding-small uk-margin-top cartColor'>";
			echo "<h2 class='uk-text-center heroBlack'>Total: Php".$total."<h2>";
			echo "<span><a href='checkout.php'><button type ='button' class='uk-button uk-button-secondary uk-text-center'>Check Out</button></a><span></form>";


			echo "</div>";
			echo "</div>";
        	echo "</div>";	

		} // End of User Cart

		echo "</div></div></div>";

		// Items 
		echo "<div id='filter'>"; // FILTER AJAX
		$sql = "SELECT * FROM shops";
		$result = mysqli_query($conn,$sql);
		echo '<div class="uk-section uk-section-default uk-padding-remove-top uk-padding-large">
			<div class="uk-container uk-margin-remove-top">
				<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>';

		while ($item = mysqli_fetch_assoc($result)) {
			$index = $item['id'];

			if ($filter == 'ALL' || $item['category_id'] == $filter) {
				echo '<div>
						<div class="uk-card uk-card-default uk-card-body">
						<img src="'.$item['image'].'"width="80" height="80">
				            <h3 class="uk-card-title">'.$item['brand'].'</h3>
				            <p class="uk-margin-remove">'.$item['model'].'</p>
				            <p class="uk-margin-remove-top">P'.$item['price'].'</p>';

				if(isset($_SESSION['username']) && $_SESSION['type_id'] == '2'){
					echo "<button class='uk-button uk-button-default render_modal_edit' href='#modal-sections' uk-toggle data-index='$index'>EDIT</button>";
					echo "<button class='uk-button uk-button-default uk-margin-small-left delete_modal_body' href='#modal-sections' uk-toggle data-index='$index'>DELETE</button>";

				} else if(isset($_SESSION['username'])) {
					echo "<form method='POST' action='add_to_cart.php?index=$index'>";
					echo "<button class='uk-button uk-button-default render_modal_cart' href='#modal-sections' uk-toggle data-index='$index'>PURCHASE</button>";
					echo "</form>";
				}	

				echo '</div></div>';

			}

		} // End of Items Loop
			echo "</div>";

		// Universal Modal
		echo '<div id="modal-sections" uk-modal>
				<div class="uk-modal-dialog" id="modal-body1">
					<button class="uk-modal-close-default" type="button" uk-close></button>
   						<div class="uk-modal-header">
        					<h2 class="uk-modal-title uk-text-center"><a class="uk-logo"><img src="assets/images/gravblack.svg" class="moonModal uk-text-center"></a></h2>
   						</div>
    				<div id="modal-body">
    					<div class="uk-modal-body">
    				</div>
       			</div>
			</div>'; //End of MODALS

		echo "</div></div>";

		echo "</div></div></div>"; //End of ITEMS
		     			

};

require "template.php";

?>
<script type="text/javascript">

// ADD ITEM

	$("#add_item").click(function(){
		$.ajax({
			method: 'post',
			url: 'modal_add.php',
			data: {
				add: true,
			},
			success: function(data){
				$("#modal-body").html(data);
				$("#modal-sections").modal('show');
			}
		})
	});

// EDIT ITEM 

	$(".render_modal_edit").click(function(){
			var index1 = $(this).data('index')
			$.ajax({
				method: 'post',
				url: 'modal_edit.php',
				data: {
					edit : true,
					index : index1
				},
				success: function(data){
					$("#modal-body").html(data);
				}
			})
		})

// DELETE ITEM

	$(".delete_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'modal_delete.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

// PURCHASE

	$(".render_modal_cart").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'modal_cart.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	});

// FILTER
  function filter(item)
    {
        $.ajax({
            type: "post",
            url: "filter.php",
            data: { 
            	filter: item 
            },
            success:function(data){
                $('#filter').html(data);
            }
        });
    }

</script>



















