<?php
include("includes/common.php");

$cno=$_POST['cno'];
$opassword=md5($_POST['opassword']);
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
if($password==$repassword)
{
	$sql="update users set password='$password' where contact='$cno'";
	       mysqli_query($conn, $sql);
	 echo "<script>alert('Your password updated Sucessfully');
               window.location='index.php';
			   exit();
			   </script>";
}
else
{
	 echo "<script>alert('Both Password Must be same.');
               window.location='settings.php';
			   exit();
			   </script>";
}


?>