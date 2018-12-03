<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	$var_value = $_GET['varname'];
	$cookie_name = "CS3500_final_user";
	$delimiter = ",";
	$value = $_COOKIE[$cookie_name];
    $newValue = $value . ',' . $var_value;
	setcookie($cookie_name, $newValue, time() + (200));
	?>

	window.onload = function() {
    window.location.href = "catalog.php";
	}

</body>
</html>