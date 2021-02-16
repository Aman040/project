<?php
include("includes/common.php");
$id=$_GET['id'];
$user_id=$_SESSION['uname'];
$sql="DELETE FROM users_items WHERE user_id = '$user_id' and item_id='$id'";
mysqli_query($conn,$sql);
$sql1="DELETE FROM items WHERE id='$id'";
mysqli_query($conn,$sql1);
header('location:cart.php');



?>