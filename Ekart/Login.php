<?php
require("includes/common.php");
?>
<html lang="en.us">
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Login
</title>
<link href="style.css" type ="text/css" rel="stylesheet">

</head>
<body>
<?php
include("includes/header.php");
?>
 <div class="container" style="padding:60px">
 <div class="panel panel-primary">
 <div class="panel-heading">
 <h4><p class="text-warning">Login to make a purchase</p></h4>
 </div>
 <div class="panel-body">
 
 <form method="POST" action="login_submit.php" >
 <div class="form-group">
 Email:<input type="text" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email">
 </div>
 <div class="form-group">
 Password:<input type="password" class="form-control" required="required" pattern=".{5,}" name="password">
 </div>
 <div class="form-group">
 <button type="submit" name="submit" class="btn btn-primary">Login</button>
 <div class="panel-footer">Don't have an account? <a href="SignUp.php">Register</a></div>
 
 
 
 </div>
 </form>
 </div>
 </div>
 </div>
 <?php
include ("includes/footer.php");
 ?>
</body>
</html>

 