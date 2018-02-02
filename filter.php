<?php 

require "connection.php";
$filter = $_POST['filter'];

session_start();
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	}

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