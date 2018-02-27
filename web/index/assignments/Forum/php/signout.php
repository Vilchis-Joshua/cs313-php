<?php
	session_start();
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		unset($_SESSION['username']);
		header("Location: signin.php");
		die();
	 } else {
		header("Location: mainpage.php");
		die();
	}
?>