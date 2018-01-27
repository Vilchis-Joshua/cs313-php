<?PHP
	session_start();

	function addToCart(value) {
	if($_SESSION['product']) {
			$_SESSION['product'] = array();
			$_SESSION['quantity'] = array();
		}
		if (value == 1) {
			array_push($_SESSION['product'], $_POST['name']);
		} else {
			array_push($_SESSION['quantity'], $_POST['number']);
		}
	}
?>