<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>events</title>
</head>
<body>
		<table border="2px">
		<?php if (isset($result) and $result != false) {?>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>type</th>
					<th>time</th>
					<th>date</th>
					<th>venue</th>
					<th>description</th>
					<th><a href="<?php echo base_url('Event_Controller/add'); ?>">Add</a></th>

				</tr>
			</thead>
			<?php foreach ($result as $value) {?>
			<tbody>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->type ?></td>
					<td><?php echo $value->time ?></td>
					<td><?php echo $value->date ?></td>
					<td><?php echo $value->venue ?></td>
					<td><?php echo $value->description ?></td>
					<td><a href="<?php echo base_url('Event_Controller/delete/'.$value->id) ?>">delete</a></td>
				</tr>
			</tbody>
		<?php } }?>
		
		<?php if (isset($message)) {
			echo $message;
		} ?>

</body>
</html>