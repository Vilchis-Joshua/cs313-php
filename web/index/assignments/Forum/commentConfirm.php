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
    <div id="a">
		<?php
			include('php/AccessDb.php');
			$comment = $_POST['comment'];
			echo '<p>' . $comment . '</p>';
			$thisdate;
			foreach ($db->query('SELECT now()') as $row)
			{
				$thisdate =$row[0];
			}
			
			#GRANT SELECT, INSERT, UPDATE ON TABLES IN SCHEMA public TO postgres;
			#GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO postgres;
			$stmt = $db->prepare("INSERT INTO public.POST (post_id, post_date, post_content) VALUES (:thisdate, :content)");

			$stmt->bindParam(':thisdate', $thisdate);
			$stmt->bindParam(':content', $content);
			$stmt->execute();
		?>
    </div>
	
	<div>
		<form action="forum.php">
			<input type="submit" value="Confirm" />
		</form>
	</div>
</body>
</html>


