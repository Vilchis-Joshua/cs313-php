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



			$_SESSION['stmt2'] = $db->lastInsertId(post_post_id_seq);
			$temp1 = $db->lastInsertId(post_post_id_seq);
			$InsertStmt = $db->prepare("INSERT INTO FORUM VALUES (DEFAULT, 
			(SELECT users_id FROM USERS WHERE users_username = :users),
			(SELECT post_id FROM POST WHERE post_content = :post))");
			$InsertStmt->bindValue(':users', $temp2);
			$InsertStmt->bindValue(':post', $temp1);
			$InsertStmt->execute();

			header("Location: forum.php");
			die();
		?>
    </div>
</body>
</html>