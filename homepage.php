<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add event</h1>
	<form action="createEvent.php" method="POST">
		Name <input type="name" name="name">
		<br>
		Max number of entries <input type="name" name="limit">
		<br>
		<input type="submit" name="addSportEvent">
	</form>
	<h1>Remove event</h1>
	<form action="removeEvent.php" method="POST">
		<select name="eventName">
			<?php
			require 'getEvent.php';
			foreach ($array as $option): ?>
			<option value="<?php echo $option->name; ?>"><?php echo $option->name; ?></option>
			<?php endforeach; ?>
		</select>
		<input type="submit" name="deleteEvent">
	</form>
</body>
</html>