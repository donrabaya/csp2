<?php 

require "connection.php";
$filter = $_POST['filter'];

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
		



?>