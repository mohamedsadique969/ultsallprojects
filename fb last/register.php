<?php

  $con = mysqli_connect('localhost','root','pass','ults') or die("unable to connect");
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $first_name=$_POST['first'];
  $second_name=$_POST['second'];
  $phone=$_POST['phone'];	  
  $email=$_POST['email'];
  $pass=$_POST['pass'];
	// echo $first_name.$second_name.$phone.$email.$pass; 
 
  $sql="INSERT into register_fb(first,second,phone,email,password) values ('$first_name','$second_name','$phone','$email','$pass')";
  
  if(mysqli_query($con,$sql))
  {
	  echo "success";
  }
	else{
	  echo "signup failed";
	}
	} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>