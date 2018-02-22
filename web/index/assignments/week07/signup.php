<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
</head>
<body>
	<h2>Sign up now!</h2>

	<div>
		<form method="post" action="signupConfirmation.php">
			Username: <input name="username" type="text" /><br />
			password: <input name="password" type="password" /><br />
            <input type="submit" value="Sign up!" />
		</form>
	</div>
</body>
</html>