<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view units</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		if (isset($result) ) {

			?>
			<table border="2px">
				<thead>
					<tr>
						<td>id</td>
						<td>name</td>
						<td>ward</td>
						<td>address</td>
						<td>place</td>
						<td>username</td>
						<td>pasword</td>
					</tr>
				</thead>
			<?php foreach ($result as $key => $value) {?>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->ward ?></td>
					<td><?php echo $value->address ?></td>
					<td><?php echo $value->place ?></td>
					<td><?php echo $value->username ?></td>
					<td><?php echo $value->password ?></td>


					<td><a href="<?php echo base_url('index.php/Unit_Controller/delete/'.$value->id) ?>"> Delete</a></td> 

				</tr>
			<?php }
		}
	 ?>
</body>
</html>