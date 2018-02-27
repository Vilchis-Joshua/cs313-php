<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>

    <h2>Click confirm to confirm post</h2>
	
	<div>
		<form action="forum.php">
			<input type="submit" value="Confirm" />
		</form>
	</div>
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
			header("Location: mainpage.php");
			die();
		} else {
			echo 'it failed';
		}
#		if (!isset($_SESSION['userValue']) && empty($_SESSION['userValue']))
#			
#			$_SESSION["userValue"] = $_POST['userName'];
#			echo 'hello';
#			foreach ($db->query('SELECT * FROM USERS WHERE USERS_ID = $_SESSION['userValue']' as $row)
#			{
#				print $row['userValue'];
#			}
#		else {
#			echo 'There is a session';
#		}


	?>
    </div>
</body>
</html>