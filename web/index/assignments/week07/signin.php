<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week07 Team Activity</title>
</head>
<body>
	<h2>Sign in</h2>

	<div>
		<form method="post" action="signinConfirmation.php">
			Username: <input name="username" type="text" /><br />
			password: <input name="password" type="password" /><br />
            <input type="submit" value="Sign in" />
		</form>
	</div>
	<div>
		<br /><br />
		<p>Not a member? Sign up now!</p>
		<form action="signup.php">
			<input type="submit" value="Sign up" />
		</form>
	</div>
</body>
</html>