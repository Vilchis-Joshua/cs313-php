<?PHP
	$stmt = $db->prepare("SELECT article_id, article_title, article_date, article_content FROM article");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<p>';
			echo $row['article_title'] . ' - ' . $row['article_date'];
		echo '</p>';				
	}
?>