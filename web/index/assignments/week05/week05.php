<?PHP session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <!--<link rel="stylesheet" type="text/css" href="week03.css" />
    <script src="week03.js"></script>-->
</head>
<body>
	<h2>Hello World! </h2>
    <div>
        <form action="week05.php">
            Submit: <input name="try" type="submit" />
        </form>
    </div>

	<div>
		<br />
		<?PHP include('php/AccessDb.php'); ?>
		<br />
	</div

	echo 'table id="scriptures"';
	foreach ($db->query('SELECT scriptures_id, scriptures_book, scriptures_chapter, scriptures_verse, scriptures_content FROM public.scripture') as $row) {
		echo '<tr><td>'.$row[scriptures_book] . ' ' . $row[scriptures_chapter] . ':' . $row[scriptures_verse] . $row[scriptures_content] . '</td>';
	}

	echo '</table>';
    <div>
        <a href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>
