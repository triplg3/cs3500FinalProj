<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	//php gets and updates the values of cookies appending to the end of the string
	$var_value = $_GET['varname'];
	$cookie_name = "CS3500_final_user";
	$delimiter = ",";
	$value = $_COOKIE[$cookie_name];
    $newValue = $value . ',' . $var_value;
	setcookie($cookie_name, $newValue, time() + (86400 * 30));
	header('Location: Product.php?varname='.$var_value);
	?>

</body>
</html>