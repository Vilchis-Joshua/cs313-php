<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
	<?php
		if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			echo '<h2> Welcome to CBA, ' . $_SESSION['username'] . '</h2>';
		} else {
			header("Location: signin.php");
			die();
		}
	?>
    <nav id="navigation">
        <a href="forum.php">Forum</a> |
        <a href="signin.php">Sign in</a>
    </nav>

    <div>
	<br /><br />
		<img src="pics/cyberbullying1.jpg" height="128" width="128"/>
    </div>

	    <div>
        <p id="intro">
            What is CBA? CBA is Cyberbullying Awareness. In current society, there have been more and more problems with bullying on the internet. What are the problems? What are the symptoms of a victim? <br />
			What can we do? This forum is a place for those involved and for those who wish to help someone that they know if they are suffering, as well as a place to pose new questions and concerns. <br />
            Nobody here is an actual doctor, so no one should "prescribe" a prescription, but it should be a place of discussion to help get the word out <br />
            so that we can better work towards a solution.
        </p>
    </div>

    <div>
        <p>
            Check out some of the most recent articles on cyberbullying
        </p>
    </div>

    <div>
        <p>
            There will be some articles around here written here.
        </p>
    </div>
    <div class="footer">
        <a id="footerLink" href="../../index.html">Assignment Index</a>
		<a id="footerLink" href="php/signout.php">SignOut</a>
    </div>
</body>
</html>