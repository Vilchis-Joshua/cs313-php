<?PHP
	$dbUrl = getenv('DATABASE_URL');

	$dbopts = parse_url($dbUrl);

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');

	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	if($db){
	echo "Connected <br />".$db;
	echo "Username: " . $_POST["username"];
	echo "Password: " . $_POST["password"];

	}else {
		echo "Not connected";
	}
?>