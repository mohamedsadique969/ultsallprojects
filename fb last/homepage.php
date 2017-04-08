<?php
   session_start();
   if($_SESSION['username']==""){
	   header("Location:test3.html");
   }
   else{
	  $con = mysqli_connect('localhost','root','pass','ults') or die("unable to connect");
	   $id=$_SESSION['id'];
      $sql = "SELECT * from register_fb WHERE id='$id'";
      $result = mysqli_query($con,$sql);
	  $getdetails=mysqli_fetch_array($result);
      
   }
?>
<html>
<head>
   
<title>Home page</title>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(".add").click(function(){
			$.ajax({
				type: 'POST',
				url: 'friends.php',
				data: $('form').serialize(),
				success:function(html){
					$("#div1").after(html);
				}
			});
			return false;
		});
	});
	
	</script>
</head>

<body>
      <div style="width: 325px;height:100%;float: left;background-color: #2A0F5C">
        <div style="background-color: #188F7E">
      	<h1 style="font-size:35px;font-variant-caps: all-petite-caps"><b><center><?php 
			 echo $getdetails['first'];
			?></center></h1>
        <h1 style="font-size: 40px;font-variant-caps: all-petite-caps"><b><center><?php 
			 echo $getdetails['second'];
			?></center></h1>
       </div>
       <div>
           <h3>Email:<?php
			   echo $getdetails['email']; 
			   ?>
			   </h3>
			 <h3>Phone:<?php
			   echo $getdetails['phone']; 
			   ?>
			   </h3>
	  </div>

     
      <div>
      	<form>
    	<input type="text" name="var_name">
	    <button type="submit" name="add" class="add">add</button>
        </form>
      </div>
         <div id="div1" style="background-color: #C15859"></div>
    </div>
   
</body>
</html>