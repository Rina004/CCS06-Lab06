<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
	
</head>
<body>
	<h1>Thank You!</h1>

	<?php
	if (isset($_POST['complete_name'], $_POST['email'], $_POST['type'], $_POST['satisfaction_level'], $_POST['message'])) {
		$complete_name = $_POST['complete_name'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$satisfaction_level = $_POST['satisfaction_level'];
		$message = $_POST['message'];

		echo "<p>Received $type message from $complete_name ($email)</p>";
		echo "<p>$message</p>";
		echo "<p>Satisfaction Level: $satisfaction_level</p>";
	}
	else {
		echo "<p>Data entered is incorrect. Please try again.</p>";
	}
	?>

</body>
</html>