<!DOCTYPE html>
<html>
<head>
  <title>Catalog</title>
  <link rel="stylesheet" href="3pages.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$var_value = 0;
function outputProduct() {
	$var_value = $_GET['varname'];
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
	echo "SELECT * FROM catalog where id =".$var_value;
	
$conn->close();
}

}
	
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://i.imgur.com/ZYho29R.png">Parts Store</a>
        </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
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
	<br><br><br><br>
	<?php
		outputProduct();
	?>
	 
</body>
</html>
