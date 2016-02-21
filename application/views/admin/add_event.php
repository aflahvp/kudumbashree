<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="event_head">
	<h1><font color="red">ADD EVENTS</font></h1>
	<?php echo validation_errors(); ?>
	<form action="<?php echo base_url('Event_Controller/add'); ?>" method="post">
	<div class="grp">
		<label for="name">Event name</label>
			<input type="text" name="name" id="name"></br></div>
	
	<div class="grp">
		<label for="type">Event Type</label>
			<input type="text" name="type" id="type"></br></div>
	

	<div class="grp">
		<label for="time">Event Time</label>
			<input type="text" name="time" id="time"></br></div>
	
	<div class="grp">
		<label for="date">Event Date</label>
			<input type="text" name="date" id="date"></br></div>
	
	<div class="grp">
		<label for="venue">Event Venue</label>
			<input type="text" name="venue" id="venue"></br></div>
	
	<div class="grp">
		<label for="description">Event Description</label>
			<input type="text" name="description" id="description"></br></div>
	
	<div class="grp_btn">
		<button>SUBMIT</button>
		<input type="reset" name="reset" id="reset" value="RESET">
		<input type="button" name="cancel" id="cancel" value="CANCEL">
	</form>
</body>
</html>