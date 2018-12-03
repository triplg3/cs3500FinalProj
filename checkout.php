<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="3pages.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://i.imgur.com/ZYho29R.png">Parts Store</a>
        </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Catalog.php">Catalog  <span class="glyphicon glyphicon-book"></span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Catalog.php">All</a></li>
          <li><a href="CatalogGC.php">Graphics Cards</a></li>
          <li><a href="CatalogCPU.php">CPU</a></li>
          <li><a href="CatalogCooler.php">Coolers</a></li>
          <li><a href="CatalogMB.php">MotherBoards</a></li>
        </ul>
      </li>
            <li><a href="SignUp.html">Sign-Up <span class="glyphicon glyphicon-pencil"></span></a></li>
      <li><a href="Cart.php">Shopping Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
      </div>
    </nav>
  <br><br>
<br><br>
<br><br>
<?php 
// Create connection
        $conn = pg_connect("host=ec2-54-197-249-140.compute-1.amazonaws.com port=5432 dbname=d6gonsmn2ss9v6 user=cmbwirfswuomta password=3f34561b8edb946546b2555d59c86a153fd4a84498684a7c1660b0020d383ea1");
          // Check connection
        if (!$conn) {
          echo("Connection failed: We Ded" );
    
  } 
  $cookie_name = "CS3500_final_user";
  $delimiter = ",";
  $total = 0;
  $value = $_COOKIE[$cookie_name];
    $cookie_array = explode ("," , $value, 1300 );
    $moneyString = $cookie_array[5];
    $money = (int) $moneyString;
    $arrlength = count($cookie_array);
    if($arrlength > 6){
      if($cookie_array[0] == true){
        // Create connection
        $conn = pg_connect("host=ec2-54-197-249-140.compute-1.amazonaws.com port=5432 dbname=d6gonsmn2ss9v6 user=cmbwirfswuomta password=3f34561b8edb946546b2555d59c86a153fd4a84498684a7c1660b0020d383ea1");
          // Check connection
        if (!$conn) {
          echo("Connection failed: We Ded" );
    
  } 
  for($i = 6; $i < $arrlength; $i++){
  $sql = "SELECT * FROM catalog WHERE id =" . $cookie_array[$i];
  $result = pg_query($conn, $sql);
  $row = pg_fetch_row($result);
  $id = $row[0];
  $name = $row[1];
  $price = $row[3];
  $total = $total + $price;
}
	if($money >= $total){
	echo "<h2>You spent " . $total . "webcoins</h2>";
	$newmoney = $money - $total;
	echo "<h2>You have " . $newmoney . " webcoins remaining</h2>";
}
	else {echo "<h2> You do not have enough money! Sorry!</h2>";
		echo ("<a href='Cart.php' class='btn btn-success btn-block btn-lg'>Cart</a>");
}
}}
?>

</body>
</html>