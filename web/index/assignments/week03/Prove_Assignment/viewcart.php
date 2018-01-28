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

	<div>
		<br />
		<a href="prove03.html">Browse</a> <br /><br />
		<a href="checkout.php">Checkout</a> 
	</div>
</body>
</html>