
<?php
	
	include("includes/common.php");
	
	
	if(isset($_SESSION['uname']))
	{
		header('location:products.php');
	}
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
SignUp
</title>
<link href="style.css" type ="text/css" rel="stylesheet">

</head>
<body>
<?php
 include("includes/header.php");
?>
 <div class ="container" style="padding-top:60px">
 <div class="row">
 <div class="col-md-3"></div>
 <div class="col-md-6">
 <h2 style="color:red">SignUp Form</h2>
 <form method="POST" action="signup_submit.php">
 <div class="form-group">
User Name:<input type="text" class="form-control" required="required" name="name"placeholder="User Name">
</div>
<div class="form-group">
Email:<input type="text" class="form-control" required="required"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Must be in Email's pattern" name="email">
</div>
<div class="form-group">
Password:<input type="password" class="form-control" required="required" pattern=".{5,}" placeholder="Password Must be More than 5 Words" name="password">
</div>
<div class="form-group">
Contact No.: <input type="text" class="form-control" required="required" pattern=".{10,}" placeholder="Must be More than 10 digits" name="contact">
</div>
<div class="form-group">
City:<input type="text" class="form-control" required="required" pattern=".{3,}" placeholder="City Must be More than 3 characters" name="city">
</div>
<div class="form-group">
Address:<input type="text" class="form-control" required="required" pattern=".{5,}" placeholder="Address Must be More than 4 characters" name="address">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">SignUp</button>
</div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
 <?php
 include ("includes/footer.php");
 ?>
 </body>
 </html>