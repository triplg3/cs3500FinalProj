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
/*
function outputGPU() {
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "computer catalog";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM catalog where type = 'Graphics card'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		$count=0;
		$Name = array("","","","");
		$Price = array("","","","");
		$Img = array("","","","");
		while($row = $result->fetch_assoc()) {

			$Name[$count] =  $row["name"];
			$Price[$count] = $row["price"];
			$Img[$count] = $row["imgpath"];
			$count+=1;
			if($count==4){
				$count = 0;
			
        	$order = <<<ORDER
<div class="row">		
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[0]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[0]}		
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[1]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[1]}
		
		
		
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[2]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[2]}
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Img[3]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Name[3]}
		</div>
      </div>
    </div>
</div>

ORDER;
echo $order;
    }
} 
	}
else {
    echo "0 results";
}

$conn->close();
}
*/
function outputGPU() {
	include 'data.inc.php';
		// output data of each row
		$count=0;
		while($count<4) {
			$count1=$count+1;
			$count2=$count+2;
			$count3=$count+3;			
        	$order = <<<ORDER
<div class="row">		
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Imgs[$count]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Names[$count]}	
		<hr>Price:&curren {$Prices[$count]} 	<a href="Product.php?varname={$count}">Visit Store Page</a>	
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Imgs[$count+1]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Names[$count+1]}
		<hr>Price:&curren {$Prices[$count+1]} <a href="Product.php?varname={$count1}">Visit Store Page</a>
		
		
		
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Imgs[$count+2]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Names[$count+2]}
		<hr>Price:&curren {$Prices[$count+2]} <a href="Product.php?varname={$count2}">Visit Store Page</a>
		</div>
      </div>
    </div>
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="{$Imgs[$count+3]}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$Names[$count+3]}
		<hr>Price:&curren {$Prices[$count+3]} <a href="Product.php?varname={$count3}">Visit Store Page</a>
		</div>
      </div>
    </div>
</div>

ORDER;
echo $order;
$count+=4;
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
					<li class="active"><a href="CatalogGC.php">Graphics Cards</a></li>
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
	 		<div class="container">  
                  <?php
				 
					 outputGPU();

					 
					 ?>  
					</div><br>		 
</body>
</html>