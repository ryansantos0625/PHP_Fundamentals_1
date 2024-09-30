<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<?php
	if (isset($_SESSION['firstName'])) {
		echo "A user is already logged in as " . $_SESSION['firstName'] . ". Please log out first.";
		exit(); 
	}

	if (isset($_POST['submitBtn'])) {
		$firstName = $_POST['firstName'];
		$password = md5($_POST['password']);

		if (!empty($firstName) && !empty($password)) {
			$_SESSION['firstName'] = $firstName;
			$_SESSION['password'] = $password;

			echo "Login successful! Welcome, " . $firstName;
			echo "<br><a href='index.php'>Go back to home</a>";
		} else {
			echo "Please fill in both fields.";
		}
	} else {
		echo "No form data received.";
	}
	?>
</body>
</html>
