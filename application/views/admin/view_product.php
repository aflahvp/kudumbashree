<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="2px">
	<?php  if(isset($result) and $result != FALSE) {?>
		<thead>
	    <tr>
	       <th>Name</th>
	       <th>DISCRIPTION</th>
		   <th><a href="<?php echo base_url('Product_Controller/add'); ?>">Add</a></th>
		
	    </tr>
			</thead>

		<?php foreach ($result as $value) {?>
			<tbody>
				<tr>
					
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->description ?></td>
					<td><a href="<?php echo base_url('Product_Controller/delete/'.$value->id) ?>">delete</a></td>
				</tr>
			</tbody>
		<?php } }?>
		
		<?php if (isset($message)) {
			echo $message;
		} ?>

</body>
</html>