<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Prove</title>
    <link rel="stylesheet" type="text/css" href="prove03.css" />
    <script src="prove03.js"></script>
</head>
<body>
	<?PHP
		if (empty($_SESSION["product"])) {
			$_SESSION["product"] = array();
		}
	     include('AccessDb.php');
	
		echo 'gg';
		foreach ($db->query('SELECT product_id, product_name, product_price, product_description FROM public.PRODUCT') as $row) {
			echo '<tr><td><b>' . $row[product_name] . ': ' . $row[product_price] . ':<br />' . $row[product_description] . '</td></tr>';
		}	
		echo 'Are you there?';
	?>


    <form action="viewcart.php" method="post">
        <div class="prod">
            <div id="bacon">
                <img src="Pictures/bacon.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="bacon" />
            </div>
            <div id="oj">
                <img src="Pictures/oj.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="oj" />
            </div>
            <div id="hashbrowns">
                <img src="Pictures/hashbrowns.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="hashbrowns"/>
            </div>

            <div id="tables">
                <img src="Pictures/table.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="tables" />
            </div>
            <div id="chair">
                <img src="Pictures/chari.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="chair" />
            </div>
            <div id="plates">
                <img src="Pictures/plate.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="plates" /> 
            </div>
        </div>
        <input class="inputButton" value="Add" type="submit"/>
    </form>

    <span>
        <br />
        <a class="prove" href="../week03.html">Team Activity</a>
    </span>
</body>
</html>