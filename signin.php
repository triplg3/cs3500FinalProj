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
<?php 
$cookie_name = "CS3500_final_user";
$delimiter = ",";
if(!isset($_COOKIE[$cookie_name])) {
    echo "You have not been registered yet! Please register using the link below to sign in!";
    echo ("<a href='SignUp.html' class='btn btn-success btn-block btn-lg'>Sign up!</a>");
} else {
    $value = $_COOKIE[$cookie_name];
    $cookie_array = explode ("," , $value, 1300 );
    $arrlength = count($cookie_array);
    if($arrlength >= 3){
    	if($cookie_array[0] == "false"){
      if($cookie_array[1] == $_GET["email"] && $cookie_array[2] == $_GET["password"]){
      	echo "You are now signed in! <br> Please use the button below to browse!";
      	echo ("<a href='index.php' class='btn btn-success btn-block btn-lg'>Home!</a>");
      }
      else{
      	echo "Wrong username or password, please click the button to try again";
      	echo ("<a href='SignUp.html' class='btn btn-success btn-block btn-lg'>Sign up!</a>");
      }
  }
  else {
    	if($cookie_array[0] == "true"){
    		echo "You are already signed in! <br> Please use the button below to browse!";
    		echo ("<a href='index.php' class='btn btn-success btn-block btn-lg'>Home!</a>");

    	}
    
}
    }
  }

 

?>
</body>
</html>