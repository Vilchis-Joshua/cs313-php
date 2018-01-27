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
			foreach ($_POST["product"] as $item) {
				array_push($cart_items, $item);
				echo "$item" . "<br/>";
			}
			$_SESSION["Product"] = $cart_items;
		}
	?>

	<a href="prove03.html">Browse</a>
</body>
</html>