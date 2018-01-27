<?PHP session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <!--<link rel="stylesheet" type="text/css" href="PonderAssignment07.css">
    <script type="text/javascript" src="stuff.js"></script>-->
</head>
<body>
	<div>
		<p>These are the items that you purchased:</p>
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
		</div>
	<div>
		<br />
		<a href="viewcart.php">View Cart</a><br/>
		<a href="confirmation.php">Confirm</a>

	</div>
</body>
</html>


