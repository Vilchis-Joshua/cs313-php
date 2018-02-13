<?PHP
	$stmt = $db->prepare("SELECT article_id, article_title, article_date FROM article");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<p>';
			echo $row['users_username'] . ' - ' . $row['users_password'];
		echo '</p>';				
	}
?>