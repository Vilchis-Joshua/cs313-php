<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
</head>
<body>
	<?php
		if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			echo '<h2> Welcome ' . $_SESSION['username'] . '</h2>';
		} else {
			header("Location: signin.php");
			die();
		}
	?>
</body>
</html>