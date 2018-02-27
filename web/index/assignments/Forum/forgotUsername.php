<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
</head>
<body>
	<?php
		$username = $_POST['username'];
		$_SESSION['tempUsername'] = $username;
        include('php/AccessDb.php');
		$stmt = $db->prepare("SELECT users_username, users_password FROM users");
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			if ($row['users_username'] == $username) {
				header("Location: resetPassword.php");
				die();
			}
		}
		echo 'Username does not exist';
		header("Location: signin.php");
		die();
	?>
</body>
</html>