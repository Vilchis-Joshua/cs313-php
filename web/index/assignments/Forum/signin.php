<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
	<?php
		if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
			echo '<h2> Sign in </h2>';
		} else {
			header("Location: mainpage.php");
			die();
		}
	?>
    <nav id="navigation">
        <a href="mainpage.php">Main Page</a> |
        <a href="forum.php">Forum</a>
    </nav>


    <h3>Already a member? Signin!</h3>
	<div>
		<form method="post" action="signinConfirmation.php">
			Username: <input name="username" type="text" /><br />
			password: <input name="password" type="password" /><br />
            <input type="submit" value="Sign in" />
		</form>
	</div>


    <h3>Not a member? That's okay! Sign up below</h3>
    <div id="signup">
        <form action="signup.php">
            <input type="submit" value="Sign up!" />
        </form>
    </div>
	
	<div>
	<br /><br />
	<p>Did you forget your password?</p>
	<form action="forgot.php">
		<input type="submit" value="Forgot" />
	</form>
	</div>

    <div>
        <table>
            <?PHP
#           include('php/AccessDb.php');
#            include('php/user_list.php');
#            foreach ($db->query('SELECT users_id, users_username, users_password FROM public.USERS') as $row) {
#				echo '
#				<tr><td>' . $row[users_id] . ') Username: ' . $row[users_username] . '<br />       password:' . $row[users_password] . '</td></tr>';
#           }
            ?>
        </table>
    </div>
</body>
</html>