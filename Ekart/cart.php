<?php


include("includes/common.php");


$user_id=$_SESSION['uname'];
$sql="select * from users_items INNER JOIN items ON users_items.item_id=items.id where users_items.user_id='$user_id'";

$query = mysqli_query($conn,$sql);
   if(mysqli_num_rows($query)>0)
   {
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
Your cart
</title>
<link href="style.css" type ="text/css" rel="stylesheet">

</head>
<body>
<?php
include("includes/header.php");
?>
 <div class="container" style="padding-top:60px">

 <table class="table table-striped table-border">
 <tr>
 <th>Item Number</th>
 <th>Item Name</th>
 <th>Price</th>
 
 </tr>
 
 
     <?php
	$sum=0;
	while($row = mysqli_fetch_assoc($query))
	{  
        $sum=$sum+$row['price'];
    echo "<tr><td>{$row['id']}</td>".  
          " <td>{$row['name']}</td>".  
         "<td>{$row['price']}<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>    Remove</a> </td></tr>"; 
    }?>
	<tr><td>Total</td>
	<td></td>
	<td>
	<?php 
	echo $sum;
	?>
	</td></tr>
<?php
}
else
{
echo "<script>alert('Add items to the cart first!');
              window.location='products.php';
			   exit();
			   </script>";	
}
?>
	

 <td><a href="success.php"><button type="submit" name="submit" class="btn btn-primary">Confirm Order</button></a></div></td>
 </tr>
 </table>
 </div>
  <?php
 include ("includes/footer.php");
 ?>
 
 </body>
 </html>
