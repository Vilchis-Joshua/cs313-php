<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>

	<div id="a">
		<?php
			$un = $_POST['username'];
			$p = $_POST['password'];

			include('AccessDb.php');

			$stmt = $db->prepare('SELECT users_password FROM USERS WHERE users_username = :username');
			$stmt->bindValue(':username', $un);
			$stmt->execute();

			$row = $stmt->fetch();
			$pass = $row['users_password'];
			echo '1';
		?>
    </div>
</body>
</html>