<?PHP
	$host = "ec2-54-163-228-190.compute-1.amazonaws.com";
	$dbname = "d5s1i23fgv3o18";
	$user = "bakrhjfoguxdzg";
	$password = "f86428dabd4b102ac30c3ade723ea9b002ff3db70c3eb94bf3740be2b92f9c0c";
	$port = "5432";

	$dsn = "pgsql:host=$host;dbname=$dbname;user=$user;port=$port;password=$password";
	echo "dsn: " . $dsn . "<br />";
#	db = new PDO($dsn);
#	if($db){
#		echo "Connected <br />".$db;
#		echo "Username: " . $_POST["username"];
#		echo "Password: " . $_POST["password"];
#
#	}else {
#		echo "Not connected";
#	}
?>