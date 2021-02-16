<?php

session_start();
?>
<!doctype html>
<html lang="en.us">
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Lifestyle's Products
</title>
<link href="style.css" type ="text/css" rel="stylesheet">

</head>
<body>
<?php
include("includes/header.php");
include("includes/check-if-added.php");
?>
 <div class="container">
 <div class ="jumbotron">
 <h1>Welcome to our Lifestyle Store!</h1>
 <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
 </div>
 <div class="row text-center">
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="camera.jpg" alt="Responsive image">
 Sony DSC-W830/BC Point & Shoot Camera  (Black)<br>
 ₹15000
 
   <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(1)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=1&name=Sony DSC-W830&price=15000" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="camera.jpg" alt="Responsive image">
 Sony DSC-H300 Point & Shoot Camera  (Black)<br>
 ₹15500
 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(2)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=2&name=Sony DSC-W831&price=15500" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="camera.jpg" alt="Responsive image">
 Sony DSC-W830/BC Point & Shoot Camera  (Black)<br>
 ₹45000
<?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(3)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=3&name=Sony DSC-W835&price=45000" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="camera.jpg" alt="Responsive image">
 Sony DSC-H300 Point & Shoot Camera  (Black)<br>
 ₹65800
 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(4)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=4&name=Sony DSC-W830&price=65800" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 </div>
 </div>
 <div class="row text-center">
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="shirt.jpg" alt="Responsive image">
 
Rodid Men's Solid Casual Spread Collar Shirt<br>
 ₹405
<?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(12)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=12&name=Rodid Men's Solid Casual Spread Collar Shirt&price=405" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="shirt.jpg" alt="Responsive image">

Rodid Men's Solid Casual Spread Collar Shirt<br>
 ₹405
 
<?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(5)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=5&name=Rodid Men's Solid Casual Spread Collar Shirt&price=405" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>


</div>
 
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="shirt.jpg" alt="Responsive image">
 
Rodid Men's Solid Casual Spread Collar Shirt<br>
 ₹405
<?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(6)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=6&name=Rodid Men's Solid Casual Spread Collar Shirt&price=405" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="shirt.jpg" alt="Responsive image">
 
Rodid Men's Solid Casual Spread Collar Shirt<br>
 ₹405


<?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(7)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=7&name=Rodid Men's Solid Casual Spread Collar Shirt&price=405" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class="row text-center">
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="watch.jpg" alt="Responsive image">
 Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch - For Men<br>
 ₹2800
 
 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(8)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=8&name=Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch&price=2800" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="watch.jpg" alt="Responsive image">
 Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch - For Men
 <br>
 ₹2800
 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(9)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=9&name=Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch&price=2800" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 
 
 </div>
 
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="watch.jpg" alt="Responsive image">
 Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch - For Men<br>
 ₹2800

 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(10)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=10&name=Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch&price=2800" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 </div>
 </div>
 <div class ="col-md-3 col-sm-6">
 <div class="thumbnail">
 <img src="watch.jpg" alt="Responsive image">
 Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch - For Men<br>
 ₹2800
 <?php 
    if (!isset($_SESSION['uname']))
	   { 
   ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
   <?php 
   }
   else
	 {
		 //We have created a function to check whether this particular product is added to cart or not.
		 
		 
		 if (check_if_added_to_cart(11)) 
		 
		 
		 { //This is same as if(check_if_added_to_cart != 0)
			 
		 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		 }
		 else 
		 { 
	      ?>
	     <a href="cart-add.php?id=11&name=Rich Club DK-RC=9989 Time~Walker Tan Coloured Watch&price=2800" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
	      
		  <?php
	  } } 
	 ?>
 
 
 </div>
 
 </div>
 </div>
 </div>
<?php
 include ("includes/footer.php");
 ?>
 </body>
 </html>