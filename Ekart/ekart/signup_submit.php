<?php
   include("includes/common.php");
   $name=$_POST['name'];
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $password=mysqli_real_escape_string($conn,md5($_POST['password']));
   $contact=$_POST['contact'];
   $city=$_POST['city'];
   $address=$_POST['address'];
   
   
   
   $sql = "SELECT *FROM users WHERE email = '$email' and password = '$password'";
  

  $retval=mysqli_query($conn, $sql);
   $ret=mysqli_fetch_array($retval);
   
   
   if($ret['email']!==$email&&$ret['contact']!==$contact)
   {
	   $sql = "insert into users (name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
	   $submit=mysqli_query($conn,$sql);
	    $_SESSION['uname']=$email;
	   echo "<script>alert('Welcome You signed Sucessfully');
               window.location='products.php';
			   exit();
			   </script>";
	   
	  
   }
   else
   {
	  echo "<script>alert('Email or Mobile no. already exists,Try From another Email');
               window.location='SignUp.php';
			   exit();
			   </script>";
	  
   }
   
   



?>