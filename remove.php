<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>YOU SHOULDN'T SEE THIS FOR MORE THAN A SPLIT SECOND</title>
</head>
<body>


	<?php 
	// sets up the arrays for editing
        $removeID = $_GET['varname'];
	$cookie_name = "CS3500_final_user";
  $delimiter = ",";
  $value = $_COOKIE[$cookie_name];
    $cookie_array = explode ("," , $value, 1300 );
    $moneyString = $cookie_array[5];
    $money = (int) $moneyString;
    $finalString = "true";
    $arrlength = count($cookie_array);

    // for($i = 6; $i < $arrlength; $i++){
    // 	if($removeID == $cookie_array[$i]){
    // 		for($j = )
    // 	}

    // }
    //removes the item from the cart if the item is the last item in the list
    if($removeID == $cookie_array[$arrlength-1]){
    	for ($i=0; $i < $arrlength - 1; $i++) { 
    		$tempArray[$i] = $cookie_array[$i];
    	}
    	$temparraylength = count($tempArray);
    	for ($i=1; $i < $temparraylength; $i++){
    		$finalString = $finalString . ',' . $tempArray[$i];
    	}
    	setcookie($cookie_name, $finalString, time() + (86400 * 30));

    }
    //removes beginning and middle values you wish to delete from the cart
    else{
        
    $finalString = str_replace($removeID . ",", "", $value);
    setcookie($cookie_name, $finalString, time() + (200));
}






    header('Location: Cart.php');
	?>

</body>
</html>