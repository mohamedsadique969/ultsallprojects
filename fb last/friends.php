<?php
$con = mysqli_connect('localhost','root','pass','ults') or die("unable to connect");

    $name=$_POST['var_name'];
    $sql="SELECT * from register_fb where first like '$name%'";
    $result = mysqli_query($con,$sql);
     
    $rows = mysqli_num_rows($result);
	 
	if($rows>0)
     {
	  $getid=mysqli_fetch_array($result);
	  echo $getid['first'].$getid['second'];	 
	  
   }
   else{
	echo("No Friends of this username");
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