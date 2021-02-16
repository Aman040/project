<?php
include("includes/common.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password'])); 
$sql = "SELECT *FROM users WHERE email = '$email' and password = '$password'";
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval)==0)
{
	
    header('location:SignUp.php');	
}
else
{
	 $ret=mysqli_fetch_array($retval);
     $_SESSION['uname']=$ret['email'];
	 header('location:products.php');
}
}
?>
