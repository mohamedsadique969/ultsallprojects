<?php  
	include 'db.php';
	$username = $_GET['username'];
	$password = $_GET['password'];
	$sql = "SELECT `name`, `username`, `password`, `email` FROM `user` 
		WHERE `username` = '$username' AND `password` = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	session_start();
	    	$_SESSION['name'] = $row['name'];
	    	$_SESSION['status'] = 1;
	    	header("Location: dashboard.php");
	    }
	} else {
	    header("Location: index.php");
	}
	$conn->close();
?>