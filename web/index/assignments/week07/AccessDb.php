<?php

// default Heroku Postgres configuration URL
	$dbUrl = getenv('HEROKU_POSTGRESQL_PUCE_URL');

	if (empty($dbUrl)) {
		// example localhost configuration URL with postgres username and a database called cs313db
		$dbUrl = "postgres://postgres:hello@127.0.0.1:5433/cs313-week07";
	}

	$dbopts = parse_url($dbUrl);

	//print "<p>$dbUrl</p>\n\n";

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');

	//print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";
	
	try {
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		print "<p>error: $ex->getMessage() </p>\n\n";
		die();
	}

	//foreach ($db->query('SELECT now()') as $row)
	//{
	//	print "<p>$row[0]</p>\n\n";
	//}
?>