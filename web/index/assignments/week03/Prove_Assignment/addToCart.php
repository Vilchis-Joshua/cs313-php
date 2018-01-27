<?php
	#require("includes/prove03.php");
	require 'prove03.php';
	session_start();
	array_push($_SESSION["product"], $_POST["bacon"]);
	echo "Bacon quanitity: " .  count($_SESSION["product"]);
           
?>