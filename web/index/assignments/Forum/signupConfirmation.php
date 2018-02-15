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
    <div id="a">
		<p>
			<?php
				include('php/AccessDb.php');
				echo "Welcome " . $_POST['username'] . '<br />';
				echo "Your password is: " . $_POST['password'];
				
				#GRANT SELECT, INSERT, UPDATE ON TABLES IN SCHEMA public TO postgres;
				#GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO postgres;
				$stmt = $db->prepare("INSERT INTO USERS VALUES(DEFAULT, $_POST['username'], $_POST['password'])");
				echo "working?";
				#$stmt->execute();
				echo "Yes";
			?>
		</p>
    </div>
	<div>
		<form action="mainpage.php">
			<input type="submit" value="Confirm" />
		</form>
	</div>


</body>
</html>