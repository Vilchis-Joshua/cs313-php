<?PHP
	$stmt = $db->prepare("SELECT users_id, users_username, users_password FROM users");
	$stmt->execute();

	$users_list = [];
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<p>';
			echo $row['users_username'] . ' - ' . $row['users_password'];
		echo '</p>';
		users_list[] = [
			'users_id' => $row['users_id'],
			'users_username' => $row['users_username'],
			'users_password' => $row['users_password']
		];
	}
?>

	<!DOCTYPE html>
	<head>
	</head>
	<body>
		foreach ($users_list as $row) {
			echo '<p>' 
			. $row['users_id'] 
			. ') username - ' . $row['users_username'] . '<br />'
			. 'password - ' . $row['users_password'] . '<br />'
			.  '</p>';
		}
	</body>
	</html>