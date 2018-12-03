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
<div class="container">
  <div id="picSlide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#picSlide" data-slide-to="0" class="active"></li>
      <li data-target="#picSlide" data-slide-to="1"></li>
      <li data-target="#picSlide" data-slide-to="2"></li>
      <li data-target="#picSlide" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <a href="CatalogCPU.php">
		<img src="https://i.imgur.com/ZYho29R.png" style="width:100%;">
        <div class="carousel-caption">
          <h2>CPU catalog</h2>
        </div>
		</a>
      </div>    
	  <div class="item">
	  <a href="CatalogMB.php">
        <img src="https://i.imgur.com/dZZyi7l.png" style="width:100%;">
        <div class="carousel-caption">
         <h2>Motherboard catalog</h2>
        </div>
		</a>
      </div> 
      <div class="item">
    <a href="CatalogGC.php">
        <img src="https://lh3.googleusercontent.com/hjONmQ5TMFg9EMkSjuyP4aHnEgHlm--f6jdekO1IiHhVgXWhb0Z6DetsazwanL3yadpDqrVZ13Sqk2BNLjhV8AuYERxvCyTR1x2oj6708AjVg2Bt-EnUZvW8K64iUiAd0e333nW7beq6a9v1Jld6vURSGiLzqX4WcstH0r0tZF6LA_iJVQbnaDjQj0zmDgSEhqJ0Iyc2bLKuj7EwzFAGUpJccZQ37l1AQNpCVGhx1kaCObbsjdnb34Wykr7lBhfd73hpG8cLvvOkuI4qc4JRiaopcFBcZv_czFfEYHHjv2Y5-c1xjJys7WvQ9aXUEAUYrZ_cgOesln_Lv-nz8gnio05R3DnZq-zBcsSGuErtpwanW5QDrcgSbOnz9m6seydxYvRxe7vfxwgBDflCm8qvzPvnp8bPG7olHiDSstGK_pf-2smiJ2qwdjIhB-gSUw7XVUfQT2K_ZrnPMlaxKclzx880cFapVjaNEPK1uDtt-zlOaA1pC9GVi0d8mFaWQpmLTuc5XkjDOVGCD8YTpusQenQCmR3nZ-d3WH1Hnz0NOf4LkFcIjavAboHFUlGsDd2t1QkEJl85QIAM-hiIhuOZ6iPw7c07rJuY58S1jN4KqRNx_dNKCHMNiqllV-VhY0kr347RmbjfewqF7FwHeyBBv8EK=s598-no" style="width:100%;">
        <div class="carousel-caption">
         <h2>GPU catalog</h2>
        </div>
    </a>
      </div> 
      <div class="item">
    <a href="CatalogCooler.php">
        <img src="https://lh3.googleusercontent.com/zTCRAlEn-BjzURNZkv7APrj4lEaVvHwfQVilXWwDwlb1KxiBQFuaWBedR4sxqp1TXCK4BzPtilUd7VGgoLuj5P6MXHWqkewCOsdbpGMIeimVD5t3z4lSu3lho2_QxNr1Jezhsnjn78LYaxgUbPhwA7o7IlrH8g-W9B3dswfK38PY-6bwPYrJTRA0tPP0nu3JIGlNY4sfPmOTtoA8jhMYVXpyDuvaciazHRDukDcV8kwvnu4UzF7ftVWd7kcURJtaCj3WtEIEZlM2_OQm96jzDLoQuIdBhIpX0q462caRQYpZxXmgIxjSCoINefHD6xGEGM6jZg12IWS4RHf-SJqUWC4vYyCOyoGW-v5JqCJZBs5ZMixtOP2mUmCHL7wpsWvj027bnqJ_o94o7fcmrbNoBbD4EUmrtBkilcF4NqQSbrV4fOiNhwKoEizEwyWxO6_djG6oRCWuzH3HvyT25lb0c5MOTQHBg1ng9T9NzNGOpNI-8Ue5G7Ah5NyOWKbJJI2PzpeWlF0O1hd9wZNK-d_dTzcULFiIwuYRKO85pNtsXoCwzOpjArPExapecEtsawHnfkBO2JARHzq1j1HSr4RGVaTX1R-RflNJAjQW-h_f5SM9tWsexlbS01e4yDqe_FMNqvMEu5uo-C-MtjuA1Q-EdCC8=w598-h543-no" style="width:100%;">
        <div class="carousel-caption">
         <h2>Cooler catalog</h2>
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
