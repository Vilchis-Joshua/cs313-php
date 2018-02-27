<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
    <h2>Sign up</h2>

    <h3>Congratulations! Press the button to below to continue back to the main page.</h3>
    <div>
		<form action="mainpage.php">
			<input type="submit" value="Confirm" />
		</form>
	</div>
	<div id="a">
		<?php
			include('php/AccessDb.php');
			echo "Welcome " . $_POST['username'] . '<br />';
			echo "Your password is: " . $_POST['password'] . '<br />';
			$un = $_POST['username'];
			$un = htmlspecialchars($uns);
			$p = $_POST['password'];

			#GRANT SELECT, INSERT, UPDATE ON TABLES IN SCHEMA public TO postgres;
			#GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO postgres;
			try {
				$stmt = $db->prepare("INSERT INTO public.USERS (users_username, users_password) VALUES (:username, :password)");

				$stmt->bindParam(':username', $username);
				$stmt->bindParam(':password', $password);
				$username = $un;
				$password = $p;
				$hashpass = password_hash($p, PASSWORD_DEFAULT);
				$stmt->execute();
			} catch (Exception $ex) {
				echo "Error: " . $ex;
				die();
			}
			header("Location: signin.php");
			die();
			$newId = $pdo->lastInsertId('users_id_sequence');			
		?>
    </div>
</body>
</html>


