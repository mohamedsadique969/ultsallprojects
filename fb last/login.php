<?php
  session_start();
  $con = mysqli_connect('localhost','root','pass','ults') or die("unable to connect");
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $email=$_POST['email'];
  $pass=$_POST['pass'];
	  
	$sql = "SELECT * from register_fb WHERE email='$email' AND password='$pass'";
	
    $result = mysqli_query($con,$sql);
	  $getid=mysqli_fetch_array($result);
	  $id=$getid['id'];
	$rows = mysqli_num_rows($result);
	 
	if($rows==1){
	  	$_SESSION['username']=$email;
		$_SESSION['id']=$id;
		header("Location:homepage.php");
	}  
	 else{
		 echo "failed";
	 } 
  }
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>