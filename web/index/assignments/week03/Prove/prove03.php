<?PHP
	session_start();

	function addToCart() {
	if($_SESSION['product']) {
			$_SESSION['product'] = array();
			$_SESSION['quantity'] = array();
		}

		array_push($_SESSION['product'], $_POST['name']);
		array_push($_SESSION['quantity'], $_POST['number']);
	}
?>