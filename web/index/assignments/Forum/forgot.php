<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
	<h3>Forgot your password?</h3>
	<div>
		<p>Input your username</p>
		<form method="post" action="forgotUsername.php">
			Username: <input name="username" type="text" /><br />
			<input type="submit" value="Confirm" />
		</form>
	</div>
</body>
</html>