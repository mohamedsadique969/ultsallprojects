<?php
header('content-type:application/json');


$first=$_POST['fname'];
$second=$_POST['sname'];
$mob=$_POST['mob'];
$ema=$_POST['email'];
$pass=$_POST['pass'];
$gen=$_POST['ide'];


$con=mysqli_connect('localhost','root','','facebook')or die("not connected");
$query="insert into signup values('$first','$second','$mob','$ema','$pass','$gen')";
mysqli_query($con,$query);
header("Location:facebook2.php");
?>