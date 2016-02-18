<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>events</title>
</head>
<body>
		<table border="1px">
		<?php if (isset($result) and $result != false) {?>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>type</th>
				</tr>
			</thead>
			<?php foreach ($result as $value) {?>
			<tbody>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->type ?></td>
				</tr>
			</tbody>
		<?php } }?>
		</table>
		<?php if (isset($message)) {
			echo $message;
		} ?>

</body>
</html>