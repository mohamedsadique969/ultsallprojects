<?php 
	include 'db.php';
	$name = $_GET['name'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$email = $_GET['email'];
	//INSERT INTO `user`(`name`, `username`, `password`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4])
	// sql to create table
	$sql = "INSERT INTO `user`(`name`, `username`, `password`, `email`) 
			VALUES ('".$name."', '".$username."', '".$password."', '".$email."')";
	if ($conn->query($sql) === TRUE) {
	    echo "Record Created";
        header("Location: index.php");
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>