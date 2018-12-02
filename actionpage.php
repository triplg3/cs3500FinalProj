<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="3pages.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
	<title>Welcome!</title>
</head>
<body>

	Welcome! You are now registered!
	<br>
	Please click the home button below to browse the store!
	<br>
	<?php 

	$cookie_name = "CS3500_final_user";
	$username = $_GET["email"];
	$password = $_GET["password"];
	$loggedin = "true";
	$cookie_value = $loggedin . ',' . $username . ',' . $password;
	setcookie($cookie_name, $cookie_value, time() + (200));
    // echo "Value is: " . $_COOKIE[$cookie_email];
    // echo "                         ";
    // echo "Value is: " . $_COOKIE[$cookie_password];


	?>

<!-- <a href="https://thisisatestonhowtohostahost.herokuapp.com/index.php" class="btn btn-success btn-block btn-lg">Home</a> -->
<a href="https://thisisatestonhowtohostahost.herokuapp.com/index.php" class="btn btn-success btn-block btn-lg">Home</a>
</body>
</html>