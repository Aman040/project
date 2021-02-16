<?php

include("includes/common.php");
$item_id=$_GET['id'];
$price=$_GET['price'];
$name=$_GET['name'];
$user_id=$_SESSION['uname'];



$sql="INSERT INTO users_items (user_id, item_id, status) VALUES('$user_id', '$item_id', 'added to cart')";
mysqli_query($conn,$sql);
$sql1="INSERT INTO items (id, name, price) VALUES('$item_id', '$name','$price')";
mysqli_query($conn,$sql1);

header('location:products.php');

?>