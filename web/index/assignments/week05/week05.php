<?PHP session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <!--<link rel="stylesheet" type="text/css" href="week03.css" />
    <script src="week03.js"></script>-->
	<style>
		#scripts, #scripts td {
			border: 1px black solid;
		}
	</style>
</head>
<body>
	<h2>Hello World! </h2>

	<div>
		<br />
		<?PHP include('php/AccessDb.php'); ?>
		<br />
	</div>
    <table id="scripts">
	<div>
		<?php echo $db->query('SELECT * FROM scripture.SCRIPTURES'); echo "I'm here"; ?>
	</div>
	<?php
		foreach ($db->query('SELECT scriptures_id, scriptures_book, scriptures_chapter, scriptures_verse, scriptures_content FROM scripture.scriptures') as $row) {
			echo '<tr><td><b>' . $row[scriptures_book] . ' ' . $row[scriptures_chapter] . ':' . $row[scriptures_verse] . '</b> - "' . $row[scriptures_content] . '"</td></tr>';
		}	
	?>
	</table>
    <div>
        <a href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>
