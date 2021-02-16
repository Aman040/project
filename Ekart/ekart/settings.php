<?php
include("includes/common.php");
if(!isset($_SESSION['uname']))
{
	header('location:index.php');
}?>
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
Change Password
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
 <h2 style="color:red">Change Password</h2>
 <form method="POST" action="settings_script.php">
 
 <div class="form-group">
<input type="text" class="form-control" required="required" placeholder="Contact No." name="cno">
</div>
<div class="form-group">
<input type="password" class="form-control" required="required" placeholder="Old Password" name="opassword">
</div>
<div class="form-group">
<input type="password" class="form-control" pattern=".{5,}" required="required" placeholder="New Password must be more than 5 words" name="password">
</div>
<div class="form-group">
<input type="password" class="form-control" pattern=".{5,}" required="required" placeholder="Re-type New Password" name="repassword">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Change</button>
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