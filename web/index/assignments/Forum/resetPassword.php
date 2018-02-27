<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
</head>
<body>
	<?php
		$un = $_SESSION['tempUsername'];
        include('php/AccessDb.php');
		$stmt = $db->prepare('SELECT users_password FROM USERS WHERE users_username = :username');
		$stmt->bindValue(':username', $un);
		$stmt->execute();

		$row = $stmt->fetch();
		$_SESSION['retrievedPass'] = $row['users_password'];
	?>
	<h3>Input new Password</h3>
	<div>
		<form method="post" action="inputNew.php">
			Password: <input name="password" type="text" /><br />
			<input type="submit" value="Confirm" />
		</form>
	</div>
</body>
</html>