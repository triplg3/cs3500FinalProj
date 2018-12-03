<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$var_value = 0;
// Used to draw the item on the page based on the passed id
function outputProduct() {
	// Determines How many stars to draw based on session values
	$startxt='<i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>';
	$starval = 0;
	
	$stararray = $_SESSION["stars"];
	$stockarray = $_SESSION["stock"];	
	$var_value = $_GET['varname'];
	$starval = $stararray[$var_value-10];
	$stockcount = $stockarray[$var_value-10];
	if($starval==1){
		$startxt='<i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>';
	}
	if($starval==2){
		$startxt='<i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>';

	}
	if($starval==3){
		$startxt='<i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>';

	}
	if($starval==4){
		$startxt='<i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star"></i>';

	}
	if($starval==5){
		$startxt='<i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i>';
	}
	// Sql Calls
	$servername = "ec2-54-197-249-140.compute-1.amazonaws.com";
	$username = "cmbwirfswuomta";
	$password = "3f34561b8edb946546b2555d59c86a153fd4a84498684a7c1660b0020d383ea1";
	$dbname = "d6gonsmn2ss9v6";
	// Used to hide checkout button if stock = 0
	$checkout='<a href="addtocart.php?varname={$var_value}">	 <div class="col-sm-6"><input type="submit" value="Add to Cart" class="btn btn-warning btn-block btn-lg" formaction="addtocart.php?varname={$var_value}"></div></a>';
	if ($stockcount==0){
		$checkout='';		
	}
	// Sql Calls
	// Create connection
	$conn = pg_connect("host=ec2-54-197-249-140.compute-1.amazonaws.com port=5432 dbname=d6gonsmn2ss9v6 user=cmbwirfswuomta password=3f34561b8edb946546b2555d59c86a153fd4a84498684a7c1660b0020d383ea1");
	// Check connection
	if (!$conn) {
		echo("Connection failed: We Ded" );
		
	} 

	$result = pg_query($conn, "SELECT * FROM catalog where id =".$var_value);


		// output data of each row
		while ($row = pg_fetch_row($result)) {


// Format for each product to be drawn onto
	$order = <<<ORDER
</div>
       <div class="container">
        	<div class="row">
               <div class="col-s-4 item-photo">
                    <img style="max-width:100%;" src="{$row[6]}" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">                   
                    <h3>{$row[1]}</h3>   

                    <h6><small>Our Price</small></h6>
                    <h3 style="margin-top:0px;"> &curren {$row[3]}</h3> 
					<h4>{$startxt}       with {$stockcount} in stock</h4>
						{$row[4]} <br> 


							{$checkout}
						
ORDER;
echo $order;
		}
$conn->close();
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
	<?php
		outputProduct();
	?>
</body>
</html>
