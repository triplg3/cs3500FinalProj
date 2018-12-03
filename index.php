<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- -->
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
<div class="container">
  <div id="picSlide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#picSlide" data-slide-to="0" class="active"></li>
      <li data-target="#picSlide" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <a href="CatalogCPU.php">
		<img src="https://i.imgur.com/ZYho29R.png" style="width:100%;">
        <div class="carousel-caption">
          <h2>Intel Core i9</h2>
        </div>
		</a>
      </div>    
	  <div class="item">
	  <a href="CatalogMB.php">
        <img src="https://i.imgur.com/dZZyi7l.png" style="width:100%;">
        <div class="carousel-caption">
         <h2>MSI Z390</h2>
        </div>
		</a>
      </div> 
    </div>
  </div>
</div>

<?php 



for ($i=0; $i < 100; $i++) { 
  $stars = rand(0,5);
  $stock = rand(0,10);
  $starsArray[$i] = $stars;
  $stockArray[$i] = $stock;
  //echo $starsArray[$i];
}
$_SESSION["stars"] = $starsArray;
$_SESSION["stock"] = $stockArray;

?>
</body>
</html>
