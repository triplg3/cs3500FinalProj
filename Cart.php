<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <title>Cart</title>
  <link rel="stylesheet" href="3pages.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Parts Store</a>
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
      <div class="navbar-form navbar-right">
            <?php 
             $cookie_name = "CS3500_final_user";
            if(isset($_COOKIE[$cookie_name])) {
           
            $delimiter = ",";
            $value = $_COOKIE[$cookie_name];
            $cookie_array = explode ("," , $value, 1300 );
            $arrlength = count($cookie_array);
            $money = $cookie_array[5];

            
          echo "<button class='btn btn-dark' disabled>&curren" . $money . "</button>";
        }
        else {
          echo "Please sign in!";

        }

        ?>
          </div>
      </div>
    </nav>
  <br><br>
<br><br>
<br><br>
  <?php 
  $cookie_name = "CS3500_final_user";
  $delimiter = ",";
  if(!isset($_COOKIE[$cookie_name])) {
    echo "You have not been registered yet! Please register using the link below to sign in!";
    echo ("<a href='SignUp.html' class='btn btn-success btn-block btn-lg'>Sign up!</a>");
}
  else {
  $value = $_COOKIE[$cookie_name];
    $cookie_array = explode ("," , $value, 1300 );
    $arrlength = count($cookie_array);
    if($arrlength > 6){
      if($cookie_array[0] == true){
        //NEEDS CODE TO SHOW WHAT IS IN CART
        $servername = "ec2-54-197-249-140.compute-1.amazonaws.com";
        $username = "cmbwirfswuomta";
        $password = "3f34561b8edb946546b2555d59c86a153fd4a84498684a7c1660b0020d383ea1";
        $dbname = "d6gonsmn2ss9v6";

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
  $img = $row[6];
  $description = $row[4];
$order = <<<ORDER
<br>  
	<div class="row">
		<div class='col-sm-2'></div>
			<div class='col-sm-8'>
				<div class='panel panel-primary'>
					<div class='panel-body'><img src='{$img}' class='img-responsive' style='width:100%' alt='Image'></div>
					<div class='panel-footer'>
						<div class='container'>
							{$name}  
						<hr>
						<div class="col-sm-9">Price:&curren {$price}  <a href='Product.php?varname={$id}'>Visit Store Page</a> </div>   
						<a href="remove.php?varname={$id}"> <div class="col-sm-3"><input type="submit" value="Remove From Cart" class="btn btn-danger btn-block btn-lg"></div></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
ORDER;
echo $order;
}
$order = <<<ORDER
<div class="col-sm-8"></div><a href="checkout.php"> <div class="col-sm-2"><input type="submit" value="Check Out" class="btn btn-warning btn-block btn-lg"></div></a>
ORDER;
echo $order;
$conn->close();
}

}
else {
  echo "Cart is empty!";

}

}

  ?>

</body>
</html>