<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
    <script src="js/mainpage.js"></script>
		<style>
		#scripts, #scripts td {
			border: 1px black solid;
		}
	</style>
</head>
<body>
    <h2>Sign in</h2>

    <nav id="navigation">
        <a href="mainpage.php">Main Page</a> |
		<a href="forum.php">Forum</a> |
        <a href="about.php">About</a> |
    </nav>

    <div>
        <p id="intro">
            What is CBA? CBA is Cyberbullying Awareness. In current society, there have been more and more problems with bullying <br />
            on the internet. What are the problems? What are the symptoms of a victim? What can we do? This forum is a place for those involved<br />
            and for those who wish to help someone that they know if they are suffering, as well as a place to pose new questions and concerns. <br />
            Nobody here is an actual doctor, so no one should "prescribe" a prescription, but it should be a place of discussion to help get the word out <br />
            so that we can better work towards a solution.
        </p>
    </div>
    <div>

	<div id="signin">
		<p>Already a member? Signin!</p>

	</div>
		<table>
			<?PHP

				include('php/AccessDb.php');
	
#				foreach ($db->query('SELECT users_id, users_username, users_password FROM public.USERS') as $row) {
#					echo '<tr><td><b>' . $row[users_id] . ') Username: ' . $row[users_username] . '<br />       password:' . $row[users_password] . '</td></tr>';
#				}	
				
#				$username = 'jsvilchis';
#				$password = 'asdf';
#				$stmt->bindValue(':username', $username, PDO::PARAM_STR);
#				$stmt->bindValue(':password', $password, PDO::PARAM_STR);
				$stmt = $db->prepare("SELECT users_id, users_username, users_password FROM user");
				$stmt->execute();

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo '<p> Hello World</p>';
					echo '<p>';
						echo '<strong>' . $row['users_id'] . '</strong>) ';
						echo $row['users_username'] . ' - ' . $row['users_password'];
					echo '</p>';				
				}

				echo 'Hello world';

			?>
		</table>
    </div>
    <div class="footer">
	<a href="dummy.html">Dummy</a>
	<a id="footerLink" href="../../index.html">Assignment Index</a>
    </div>
</body>
</html>