<!DOCTYPE html>
<html>
<head>
	<title>You shouldn't see this</title>
</head>
<body>

	Welcome! 
	<br>
	<?php 

	$cookie_name = "user";
	$cookie_value = "One,TWO,0afsfa,341444,v dssdv,0hello,how are you,dsds7,0asfffa,0243tg3g43g378hteynocryfhwq384o7ncmhoi7w3erlmxh78o3q4btg8v67bngo8w637g4nmcw38o4o7gmcq0p8c374gfv3mnyw4uh,1je4rt6yhj46jh";
	setcookie($cookie_name, $cookie_value, time() + (200));
	if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    // echo "Value is: " . $_COOKIE[$cookie_email];
    // echo "                         ";
    // echo "Value is: " . $_COOKIE[$cookie_password];
}

	?>


</body>
</html>