<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
</head>
<body>
	<?php
		$un = $_SESSION['tempUsername'];
		$p = $_POST['password'];
        include('php/AccessDb.php');
		$stmt = $db->prepare('UPDATE public.users
			SET users_password = :updatePassword
			WHERE users_username = :username;');
		$stmt->bindValue(':username', $un);
		$stmt->bindValue(':updatePassword', $hashpass);		
		$hashpass = password_hash($p, PASSWORD_DEFAULT);
		$stmt->execute();
		
		unset($_SESSION['tempUsername']);
		header("Location: signin.php");
		die();
	?>
</body>
</html>