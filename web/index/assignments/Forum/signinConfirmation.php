<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
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
		include('php/AccessDb.php');
		$_SESSION["userValue"] = $_POST['userName'];


		if (!isset($_SESSION['userValue']) && empty($_SESSION['userValue'])) {
			$result = pg_query($db, 'SELECT users_id FROM USERS WHERE users_username = '); 
		} else {
			echo 'You are already logged in.';
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