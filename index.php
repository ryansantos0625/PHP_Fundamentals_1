<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<h1>Fill in the input fields below</h1>
	
	<h2>
		User logged in:
		<?php
		if (isset($_SESSION['firstName'])) 
			echo $_SESSION['firstName'];
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if (isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>		
	</h2>
	<a href="unset.php">Logout</a>

	<?php if (!isset($_SESSION['firstName'])): ?>
	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
	<?php else: ?>
	<p>User is already logged in. Please log out to log in as a different user.</p>
	<?php endif; ?>
</body>
</html>
