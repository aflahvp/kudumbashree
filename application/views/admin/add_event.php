<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>ADD NEW EVENTS</h1>
	<?php echo validation_errors(); ?>
	<form action="<?php echo base_url('Event_Controller/add'); ?>" method="post">
		<label for="name">Event name</label>
			<input type="text" name="name" id="name"></br>

		<label for="type">Event Type</label>
			<input type="text" name="type" id="type"></br>

		<label for="time">Event Time</label>
			<input type="text" name="time" id="time"></br>

		<label for="date">Event Date</label>
			<input type="text" name="date" id="date"></br>

		<label for="venue">Event Venue</label>
			<input type="text" name="venue" id="venue"></br>

		<label for="description">Event Description</label>
			<input type="text" name="description" id="description"></br>

		<button>submit</button>
	</form>
</body>
</html>