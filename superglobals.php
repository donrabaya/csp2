<?php 

session_start();

if (isset($_SESSION['username'])) :
	$username = $_SESSION['username'];
	$type = $_SESSION['type_id'];
else :
	$username = "";
endif;


?>