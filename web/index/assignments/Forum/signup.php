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

    <h3>Not a member? That's okay! Sign up below</h3>
    <div id="signup">
        <form action="signupConfirmation.php" method="post">
			<br />
			Username: <input name="username" type="text" /><br />
			password: <input name="password" type="password" /><br />
            <input type="submit" value="Sign up!" />
        </form>
    </div>

</body>
</html>