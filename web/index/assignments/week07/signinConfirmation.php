<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
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

			if (password_verify($p, $pass)) {
				$_SESSION['username'] = $un;
				header("Location: week07.php");
				die();
			} else {
				echo 'it failed';
			}
			$newId = $pdo->lastInsertId('users_id_sequence');			
		?>
    </div>
</body>
</html>                       