<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php display_title(); ?></title>

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

	<?php require "partials/navbar.php"; ?>


	<?php display_content(); ?>
	

	<?php require "partials/footer.php"; ?>
	
	<!-- UIkit JS -->
	<script src="assets/js/uikit-icons.min.js"></script>
	<!-- JavaScript -->
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>