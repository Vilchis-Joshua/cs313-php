<?PHP 
#		if (!isset($_SESSION) && empty($_SESSION))
			session_start();
			$_SESSION["userValue"] = $_POST['userName'];
			echo "username: " . $_SESSION['userValue'];			
#			$isTrue = 0;
#			foreach ($db->query('SELECT * FROM USERS WHERE USERS_ID = $_SESSION['userValue']' as $row)
#			{
#				print $row['userValue'];
#			}
#		else {
#			include('php/AccessDb.php');
#		}

		foreach ($db->query('SELECT now()') as $row)
		{		
			$d = $row[0];
		}
?>
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
			echo "hello";
		?>
    </div>
</body>
</html>