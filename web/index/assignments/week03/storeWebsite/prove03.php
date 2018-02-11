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
	    include('AccessDb.php');
	
		foreach ($db->query('SELECT users_id, users_username, users_password FROM public.USERS') as $row) {
			echo '<tr><td><b>' . $row[users_id] . ': ' . $row[users_username] . ':<br />' . $row[users_password] . '</td></tr>';
		}	
	?>


    <form action="viewcart.php" method="post">
        <div class="prod">
            <div id="bacon">
                <img src="Pictures/bacon.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="bacon" 
				<?php if ($row[product_name] == 'bacon' && isset($row[product_isBought]) { echo checked; }?>				
				/>
            </div>
            <div id="oj">
                <img src="Pictures/oj.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="oj" 
								<?php 
				foreach ($db->query('SELECT product_name, product_isBought FROM public.PRODUCT') as $row) {
					if (isset($row[product_isBought]) && $row[product_name] == 'OrangeJuice') {
						echo 'checked';
					}
				} ?>				
				/>
            </div>
            <div id="hashbrowns">
                <img src="Pictures/hashbrowns.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="hashbrowns"
								<?php 
				foreach ($db->query('SELECT product_name, product_isBought FROM public.PRODUCT') as $row) {
					if (isset($row[product_isBought]) && $row[product_name] == 'Bacon') {
						echo 'checked';
					}
				} ?>				
				/>
            </div>

            <div id="tables">
                <img src="Pictures/table.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="tables" 
								<?php 
				foreach ($db->query('SELECT product_name, product_isBought FROM public.PRODUCT') as $row) {
					if (isset($row[product_isBought]) && $row[product_name] == 'Bacon') {
						echo 'checked';
					}
				} ?>				
				/>
            </div>
            <div id="chair">
                <img src="Pictures/chari.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="chair" 
								<?php 
				foreach ($db->query('SELECT product_name, product_isBought FROM public.PRODUCT') as $row) {
					if (isset($row[product_isBought]) && $row[product_name] == 'Bacon') {
						echo 'checked';
					}
				} ?>				
				/>
            </div>
            <div id="plates">
                <img src="Pictures/plate.jpg" width="200" height="200" />
                <input type="checkbox" name="product[]" value="plates" 
								<?php 
				foreach ($db->query('SELECT product_name, product_isBought FROM public.PRODUCT') as $row) {
					if (isset($row[product_isBought]) && $row[product_name] == 'Bacon') {
						echo 'checked';
					}
				} ?>				
				/>
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
