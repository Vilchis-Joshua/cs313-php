<?PHP
	$stmt = $db->prepare("SELECT users_id, users_username, users_password FROM users");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<p>';
			echo $row['users_username'] . ' - ' . $row['users_password'];
		echo '</p>';				
	}
?>