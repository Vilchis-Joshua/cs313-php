<?PHP session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
	<h2>Hello World! </h2>
	</table>
    <div>
        <a href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>
	<?php
#		foreach ($db->query('SELECT scriptures_id, scriptures_book, scriptures_chapter, scriptures_verse, scriptures_content FROM scripture.scriptures') as $row) {
#			echo '<tr><td><b>' . $row[scriptures_book] . ' ' . $row[scriptures_chapter] . ':' . $row[scriptures_verse] . '</b> - "' . $row[scriptures_content] . '"</td></tr>';
#		}	
#	?>	