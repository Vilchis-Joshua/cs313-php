<?php
	require("includes/prove03.php");
	session_start();
		echo "Bacon quanitity: " .  count($_SESSION["product"]);
           
?>