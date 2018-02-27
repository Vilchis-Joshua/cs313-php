<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/forum.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
    <h2>Forum</h2>

    <nav id="navigation">
        <a href="mainpage.php">Main Page</a> |
        <a href="signin.php">Sign in</a>
    </nav>

    <div>
		<?php
		
            include('php/AccessDb.php');
			if (isset($_SESSION['stmt2']) && !empty($_SESSION['stmt2'])) {
				unset($_SESSION['stmt2']);
			}

			$stmt = $db->prepare("SELECT discussion_id, discussion_title, discussion_date, discussion_initial_content FROM discussion");
			$stmt->execute();
			$stmt2 = $db->prepare("SELECT post_date, post_content  FROM post");
			$stmt2->execute();
			$_SESSION['stmt2'] = $pdo->lastInsertId(post_post_id_seq);
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo '<h2>' . $row['discussion_title'] . '</h2><br />';
				echo '<h3>' . $row['discussion_initial_content'] . '</h3><br />';
				echo '<p>';
				echo '</p>';
			}

			while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
				echo '<p>';
				echo '<b>' . $row['post_date'] . ' :</b><br /> ' . $row['post_content'];
				echo '</p>';
			}
#			$InsertStmt = $db->prepare("INSERT INTO FORUM VALUES (DEFAULT, :users, :post)");
#			$InsertStmt->bindValue(':users', $_SESSION['stmt']);
#			$InsertStmt->bindValue(':post', $_SESSION['stmt2']);
#			$InsertStmt->execute();
			if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
				echo '<div>
						<textarea name="comment" form="commentConf" >Enter text here...</textarea>
							<form id="commentConf" action="commentConfirm.php" method="post">
								<input type="submit" value="Post" >
							</form>
					</div>';
			} else {
				echo '<br /><br /><b> You must log in to make a comment </b>';
			}
			echo 'working?';
	    ?>
    </div>
    <div class="footer">
        <a id="footerLink" href="../../index.html">Assignment Index</a> | 
		<a href="php/signout.php">Sign Out</a>
    </div>
</body>
</html>