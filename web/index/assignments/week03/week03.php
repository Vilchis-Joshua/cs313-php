<DOCTYPE! html>
<head>
</head>
<body>
	Name: <?php echo $_POST["fullname"]; ?><br/>
	Email:  <?php echo $_POST["email"]; ?><br/>
	<a href="mailto:vil15009@byui.edu?Subject=Hello%20again" target="_top">Send mail</a>
	Your major is <?php echo $_POST["major"]; ?><br/>
	Comments: <?php echo $_POST["commentsection"]; ?><br/>
</body>
</html>