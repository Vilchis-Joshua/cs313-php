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

        <div id="signin">
            <p>Already a member? Signin!</p>
            Username: <input type="text" /><br />
            Password: <input type="password" />
        </div>
        <table>
            <?PHP
                include('php/AccessDb.php');
				include('php/user_list.php');
                //foreach ($db->query('SELECT users_id, users_username, users_password FROM public.USERS') as $row) {
					//echo '<tr><td>' . $row[users_id] . ') Username: ' . $row[users_username] . '<br />       password:' . $row[users_password] . '</td></tr>';
                //}
            ?>
        </table>
    </div>
</body>
</html>