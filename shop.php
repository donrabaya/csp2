<?php 

function display_title(){
	echo "Shop";
};

function display_content(){
	require 'connection.php';
	if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	}

	echo '<div class="uk-section uk-section-large uk-section-default uk-padding-remove-bottom">
		<div class="uk-container-large uk-container uk-margin-xlarge-left uk-margin-xlarge-right uk-border-rounded">
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
	</div>';
	echo '<div class="uk-section uk-section-default">
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
				            <img src="assets/images/casual1.jpg" alt="">
				            <h2>Luminox</h2>
				            <p>Soldier</p>
				        </li>
				        <li>
				            <img src="assets/images/luxury1.jpg" alt="">
				            <h2>Omega</h2>
				            <p>Prestige</p>
				        </li>
				        <li>
				            <img src="assets/images/smart2.jpg" alt="">
				            <h2>Garmin</h2>
				            <p>Forerunner</p>
				        </li>
				        <li>
				            <img src="assets/images/casual2.jpg" alt="">
				            <h2>Tissot</h2>
				            <p>Caveman</p>
				        </li>
				        <li>
				            <img src="assets/images/luxury2.jpg" alt="">
				            <h2>Rolex</h2>
				            <p>Padeguire</p>
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

		echo "<form class='uk-align-left'>
		<div><select class='uk-select uk-form-width-medium' name='category' onchange='this.form.submit()'><option>ALL</option>";


		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$category = $row['category'];
			echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
		}
		echo "</select>";
		echo  "</div>
	        </form>";

	    if (isset($_SESSION['username']) && $_SESSION['username'] == 'Admin') {
			echo "<button class='uk-button uk-button-default uk-align-left' id='add_item' href='#modal-sections' uk-toggle >ADD ITEM</button>";
		} else {
			echo "<button class='uk-button uk-button-default uk-align-left' uk-toggle='target: #offcanvas-flip'>CART</button>";	
			echo "<div id='offcanvas-flip' class='cartColor' uk-offcanvas='flip: true; overlay: true'>";
			echo "<div class='uk-offcanvas-bar'>";

			if (isset($_SESSION['username'])) {
				echo "<h2 class='cartColor uk-text-center'>".$username."'s Cart</h2>";
			}

			if (isset($_SESSION['cart'])) {
				
			$total = 0;
			$subtotal = 0;
			foreach ($_SESSION['cart'] as $index => $quantity) {
					$sql = "SELECT * FROM shops WHERE id='$index'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					extract($row);

					$subtotal = $row['price'] * $quantity;
					$total = $total + $subtotal;

					echo "<div class='uk-card uk-card-default uk-card-body uk-margin cartColor uk-text-center'>";
					echo "<form class='container' method='POST' action='changequantity.php?index=$index'>";
					echo "<img src='$image'>";
    				echo "<h3 class='uk-card-title uk-text-center uk-padding-remove'>".$brand."</h3>";
				   	echo "<p class='uk-margin-remove uk-text-center uk-padding-remove'>".$model."</p>";
				    echo "<p class='uk-text-center uk-padding-remove'>Total: P".$subtotal."</p>";
				    echo "<span class='uk-margin-remove-top uk-text-center'>Quantity: ".$quantity."</span>";
					echo "<input type='number' class='uk-input uk-text-center cartColor uk-padding-remove' name='change_quantity' min=1 value=1>";
					echo "<button id='delete' type='submit' class='uk-button uk-button-secondary uk-text-center'>Quantity</button>";
					echo "<a href='deletecart.php?index=$index'><button type='button' class='uk-button uk-button-secondary'>Remove</button></a></form></div>";	
					
				}
			}	

			echo "<div class='uk-card-default uk-padding-small uk-margin-top cartColor'>";
			echo "<h2 class='cartColor uk-text-center'>TOTAL: Php ".$total."</h2>";
			echo "<span><button class='uk-button uk-button-secondary uk-text-center'>Check Out</button><span>";

			echo "</div>";
			echo "</div>";
        	echo "</div>";	
		}

		echo "</div></div></div>";

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

				if(isset($_SESSION['username']) && $_SESSION['username'] == 'Admin'){
					echo "<button class='uk-button uk-button-default render_modal_edit' href='#modal-sections' uk-toggle data-index='$index'>EDIT</button>";
					echo "<button class='uk-button uk-button-default uk-margin-small-left delete_modal_body' href='#modal-sections' uk-toggle data-index='$index'>DELETE</button>";

				} else if(isset($_SESSION['username'])) {
					echo "<form method='POST' action='add_to_cart.php?index=$index'>";
					echo "<button class='uk-button uk-button-default render_modal_cart' href='#modal-sections' uk-toggle data-index='$index'>PURCHASE</button>";
					echo "</form>";
				}	

				echo '</div></div>';

			}
		}
		echo '<div id="modal-sections" uk-modal>
				<div class="uk-modal-dialog" id="modal-body1">
					<button class="uk-modal-close-default" type="button" uk-close></button>
   						<div class="uk-modal-header">
        					<h2 class="uk-modal-title uk-text-center">Title</h2>
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

</script>





















