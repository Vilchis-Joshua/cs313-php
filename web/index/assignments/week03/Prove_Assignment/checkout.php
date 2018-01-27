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
        <form action="confirmation.php" method="post">
			<p>Please input your billing address: </p><br />
			<input type="text" name="address"/>
			<button type="submit">
        </form>
    </div> <!--Submit form-->
    
	<div>
		<a href="viewcart.php">View Cart</a>
	</div>
</body>
</html>

