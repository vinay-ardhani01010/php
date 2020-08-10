<?php
	
	// By Qassim Hassan | wp-time.com
	
	session_start();

	$_SESSION['prevent_repeat'] = rand(); // Prevent a repeat of the process

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="">
</head>
<body>

	<form method="post" action="shortener.php">
		<p>Enter a long link: <input type="text" name="my-link" value=""></p>
		<p><input type="submit" value="Shorten!"></p>
	</form>

</body>
</html>
