<?php
function check_if_added_to_cart($item_id)
{
	 $host = 'localhost:3306';  
     $user = 'root';  
     $pass = 'Deepak';
     $dbname = 'store';  
     $conn = mysqli_connect($host, $user, $pass,$dbname);  
     if(! $conn )  
        {  
           die('Could not connect: ' . mysqli_error());  
        }
	
	$user_id=$_SESSION['uname'];
	
	
	$sql="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='added to cart'";
	$ret=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($ret) >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
	
}


?>