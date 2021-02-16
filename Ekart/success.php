<?php
include("includes/common.php");
if(isset($_SESSION['uname']))
{
	$user_id=$_SESSION['uname'];
	$sql="UPDATE users_items SET status ='confirmed' where user_id= '$user_id'";
	mysqli_query($conn,$sql);
	
}

else{
	header('location:success.php');
}
?>
<!doctype html>
<html lang="en.us">
<head>
<title>
Thank you
</title>
</head>
<body>
Your order is confirmed. Thank you for shopping
with us.<a href="products.php">Click here </a>to purchase any other item.
</body>
</html>