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
			$un = htmlspecialchars($un);

			$p = $_POST['password'];

			include('AccessDb.php');			
			
			try {
				$stmt = $db->prepare("INSERT INTO public.USERS (users_username, users_password) VALUES (:username, :password)");

				$stmt->bindParam(':username', $username);
				$stmt->bindParam(':password', $hashpass);
				$username = $un;
				$hashpass = password_hash($p, PASSWORD_DEFAULT);
				$stmt->execute();
			} catch (Exception $ex) {
				echo "Error: " . $ex;
				die();
			}
			header("Location: signin.php");
			die();
		?>
    </div>
</body>
</html>                       