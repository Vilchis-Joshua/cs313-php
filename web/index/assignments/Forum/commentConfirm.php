<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
    <div id="a">
		<?php
			include('php/AccessDb.php');
			$c = $_POST['comment'];
			$_SESSION['comment'] = $c;
			echo '<p>' . $c . '</p>';
			$d;
			foreach ($db->query('SELECT now()') as $row)
			{		
				$d = $row[0];
			}

			$stmt = $db->prepare("INSERT INTO public.POST (post_date, post_content) VALUES (:thisdate, :content)");

			$stmt->bindParam(':thisdate', $thisdate);
			$stmt->bindParam(':content', $content);
			$thisdate = $d;
			$content = $c;
			$stmt->execute();

			header("Location: forum.php");
			die();
		?>
    </div>
</body>
</html>