<?php  
	include 'db.php';
	session_start();
	if (isset($_SESSION['status'])) {
		header("Location: dashboard.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome user
	</title>
</head>
<body>
	<a href="create-account.php">Create Account for user</a>
	<br>
	<br>
	<form action="check-login.php">
		Username : <input type="text" name="username" placeholder="Enter your username">
		<br>
		<br>
		Password : <input type="password" name="password" placeholder="Enter your password">
		<br>
		<br>
		<button type="submit">Login user</button>
	</form>
</body>
</html>