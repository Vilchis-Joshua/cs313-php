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
			$stmt = $db->prepare("SELECT discussion_id, discussion_title, discussion_date, discussion_initial_content FROM discussion");
			$stmt->execute();
			$stmt2 = $db->prepare("SELECT post_date, post_content  FROM post");
			$stmt2->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo '<h2>' . $row['discussion_title'] . '</h2><br />';
				echo '<h3>' . $row['discussion_initial_content'] . '</h3><br />';
				echo '<p>';
				//echo $row['users_username'] . ' - ' . $row['users_password'];
				echo '</p>';
			}

			while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
				echo '<p>';
					echo '<b>' . $row['post_date'] . ' :</b><br /> ' . $row['post_content'];
				echo '</p>';
			}
	    ?>
    </div>

    <div class="footer">
        <a id="footerLink" href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>