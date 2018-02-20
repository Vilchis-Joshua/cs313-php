<?PHP session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Week03 Team Activity</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css" />
    <script src="js/mainpage.js"></script>
</head>
<body>
    <h2>Sign in</h2>

    <nav id="navigation">
        <a href="mainpage.php">Main Page</a> |
        <a href="forum.php">Forum</a>
    </nav>


    <h3>Already a member? Signin!</h3>
    <div id="signin">
        <form action="signinConfirmation.php">
            Username: <input name="userName" type="text" /><br />
            Password: <input name="password" type="password" /><br />
            <input type="submit" />
        </form>
    </div>


    <h3>Not a member? That's okay! Sign up below</h3>
    <div id="signup">
        <form action="signup.php">
            <input type="submit" value="Sign up!" />
        </form>
    </div>

    <div>
        <p>Display data</p>
        <table>
            <?PHP
            include('php/AccessDb.php');
            include('php/user_list.php');
#            foreach ($db->query('SELECT users_id, users_username, users_password FROM public.USERS') as $row) {
#				echo '
#				<tr><td>' . $row[users_id] . ') Username: ' . $row[users_username] . '<br />       password:' . $row[users_password] . '</td></tr>';
#           }
            ?>
        </table>
    </div>
</body>
</html>