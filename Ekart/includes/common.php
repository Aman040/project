<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = 'Deepak';
$dbname = 'store';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}   session_start();
?>  