<?php
	
	// By Qassim Hassan | wp-time.com
	
	session_start();

	$_SESSION['prevent_repeat'] = rand(); // Prevent a repeat of the process

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP URL Shortener Without Database!</title>
<meta name="description" content="PHP URL Shortener Without Database!">
</head>
<body>

	<form method="post" action="shortener.php">
		<p>Enter a long link: <input type="text" name="my-link" value=""></p>
		<p><input type="submit" value="Shorten!"></p>
	</form>

	<h2>Download & Usage</h2>
	<p><a href="http://wp-time.com/create-url-shortener-without-database/" target="_blank">PHP URL Shortener Without Database</a></p>

</body>
</html>