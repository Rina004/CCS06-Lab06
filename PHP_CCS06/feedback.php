<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>

<body>
	<h1>Feedback Form</h1>
	<form method="POST" action="thankyou.php">
		<label for="complete_name">Complete Name:</label>
		<input type="text" name="complete_name" id="complete_name" required><br><br>
		<label for="email">Email Address:</label>
		<input type="email" name="email" id="email" required><br><br>

		<label for="type">Type:</label>
		<select name="type" id="type">
			<option value="inquiry">Inquiry</option>
			<option value="feedback">Feedback</option>
			<option value="other">Other</option>
		</select><br><br>
		
		<label for="satisfaction_level">Level of satisfaction:</label>
		<input type="range" name="satisfaction_level" id="satisfaction_level" min="0" max="10" step="1"><br><br>
		<label for="message">Feedback Message:</label>
		<textarea name="message" id="message" rows="5" cols="30" required></textarea><br><br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>