<?PHP
	$dbUrl = getenv('HEROKU_POSTGRESQL_CHARCOAL_URL');
	$dbopts = parse_url($dbUrl);

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');
	echo $dbHost;

#	try {
#		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
#	} catch (PDOException $e) {
#		print "error!: " . $e->getMessage() . "<br/>";
#		die();
#	}

	if($db){
	echo "Connected <br />".$db;
	echo "Username: " . $_POST["username"];
	echo "Password: " . $_POST["password"];

	}else {
		echo "Not connected";
	}
?>