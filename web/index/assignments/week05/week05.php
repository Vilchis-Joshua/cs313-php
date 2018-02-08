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

	<?php
		foreach ($db->query('SELECT product_id, product_name, product_price, product_description FROM public.PRODUCT') as $row) {
			echo '<tr><td><b>' . $row[product_id] . ' ' . $row[product_name] . ':' . $row[product_price] . '</b> - "' . $row[product_description] . '"</td></tr>';
		}	
	?>
	</table>
    <div>
        <a href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>
