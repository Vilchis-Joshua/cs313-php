<?php 
	session_start();
	include('AccessDb.php');
?>
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
			foreach ($db->query('SELECT product_id, product_name, product_price, product_description FROM public.PRODUCT') as $row) {
				if ($row[product_name]) {
					UPDATE PRODUCT WHERE $row[product_name] =]
				}
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