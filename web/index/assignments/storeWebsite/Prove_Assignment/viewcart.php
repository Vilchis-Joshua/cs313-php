<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="prove03.css" />
</head>
<body>
    <h2>The following items are in your cart. <br />
    Please double check before heading to checkout.</h2>

	<div class="displayCart">
		<?PHP
			if (empty($_SESSION["Product"])) {
				$cart_items = array();
				$_SESSION["Product"];
			}

			$i = 1;
			foreach ($_POST["product"] as $item) {
				array_push($cart_items, $item);
				echo "$i) " . "$item" . "<br/>";
				$i++;
			}
			$_SESSION["Product"] = $cart_items;
		?>
	</div>

	<div>
		<br />
		<a href="prove03.php">Browse</a> <br />
		<a href="checkout.php">Checkout</a> 
	</div>
</body>
</html>