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

    <div>
        <a href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>
