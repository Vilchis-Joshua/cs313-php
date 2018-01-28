<?PHP session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="confirmation.css" />

	<style>
	</style>
</head>
<body>
	<div>
		<p class="center">These are the items that you purchased:</p>
		<?PHP
			$i = 1;
			$cart_items = array();
			foreach ($_SESSION["Product"] as $item) {
				array_push($cart_items, $item);
				echo "$i) " . "$item" . "<br/>";
				$i++;
			}
		?>
	</div>

	
	<div>
		<?php
			$address = $_POST["address"];
			echo "Send to this address: " . "$address";
		?>
	<div>
	<div>
		<br />
		<a href="viewcart.php">View Cart</a><br/>
		<a href="confirmation.php">Confirm</a>
	</div>

	</div>
</body>
</html>


