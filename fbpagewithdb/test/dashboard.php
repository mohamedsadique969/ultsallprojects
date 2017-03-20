<?php
	session_start();
	if (isset($_SESSION['status'])) {
		echo "Logged in as ".$_SESSION['name'];
		echo "<br>";
		echo "<a href='logout.php'>Logout</a>";
	} else {
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>
<h4>Write your feedback here</h4>
<select>
	<textarea>
	
	</textarea>
</select>
<br>
<br>
<button type="submit">Submit</button>

</body>
</html>