<?php
	session_start();

	if(empty($_SESSION['cart'])) {
		$_SESSION['cart']
	}

	array_push($_SESSION['cart'], $_POST['id']);
?>