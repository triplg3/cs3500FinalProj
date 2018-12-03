<html>
<?php session_start();?>
<head>
  <title>Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php	
// Function to draw each store item on to the page
function outputALL() {
	// SQL Calls
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

	$sql = "SELECT * FROM catalog";
	$result = pg_query($conn, "SELECT * FROM catalog");



		$count=0;
		$Id = array("","","","");
		$Name = array("","","","");
		$Price = array("","","","");
		$Img = array("","","","");
		//Outputs Formatted Rows of four
		while ($row = pg_fetch_row($result)) {
			$Id[$count] = $row[0];
			$Name[$count] =  $row[1];
			$Price[$count] = $row[3];
			$Img[$count] = $row[6];
			$count+=1;
			if($count==4){
				$count = 0;
			// Formatting Function
        	$order = <<<ORDER
<div class="row">		
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[0]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[0]}	
			<hr>Price:&curren {$Price[0]}  <a href="Product.php?varname={$Id[0]}">Visit Store Page</a>		
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[1]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[1]}
			<hr>Price:&curren {$Price[1]}  <a href="Product.php?varname={$Id[1]}">Visit Store Page</a>	
		
		
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[2]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[2]}
		<hr>Price:&curren {$Price[2]}  <a href="Product.php?varname={$Id[2]}">Visit Store Page</a>	
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[3]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[3]}
		<hr>Price:&curren {$Price[3]}  <a href="Product.php?varname={$Id[3]}">Visit Store Page</a>	
		</div>
      </div>
    </div>
</div>

ORDER;
echo $order;
    }
} 

$conn->close();
}

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Parts Store</a>
        </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Catalog.php">Catalog  <span class="glyphicon glyphicon-book"></span><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active"><a href="Catalog.php">All</a></li>
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
	<br><br><br><br>
	 		<div class="container">  
                  <?php
				 
					 outputALL();

					 
					 ?>  
					</div><br>		
<a href="Product.php?varname=<?php echo 0 ?>">Page2</a>					
</body>
</html>
