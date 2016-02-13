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
						<td>age</td>
						<td>dob</td>
						<td>address</td>
						<td>place</td>
						<td>sposesname</td>
						<td>fathername</td>
						<td>mothername</td>
						<td>rationcardtype</td>
						<td>category</td>
						<td>bloodgroup</td>
						<td>eligibility</td>
						<td>religion</td>
						<td>cast</td>
						<td>district</td>
						<td>taluk</td>
						<td>panchayath</td>
						<td>mibileno</td>
						<td>accountno</td>
						<td>adharno</td>
						<td>email</td>

					</tr>
				</thead>
			<?php foreach ($result as $key => $value) {?>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->age ?></td>
					<td><?php echo $value->dob?></td>
					<td><?php echo $value->address ?></td>
					<td><?php echo $value->place ?></td>
					<td><?php echo $value->spousesname ?></td>
					<td><?php echo $value->fathername ?></td>
					<td><?php echo $value->mothername ?></td>
					<td><?php echo $value->rationcardtype ?></td>
					<td><?php echo $value->category ?></td>
					<td><?php echo $value->bloodgroup?></td>
					<td><?php echo $value->eligibility ?></td>
					<td><?php echo $value->religion ?></td>
					<td><?php echo $value->cast ?></td>
					<td><?php echo $value->district ?></td>
					<td><?php echo $value->taluk ?></td>
					<td><?php echo $value->panchayath ?></td>
					<td><?php echo $value->mobileno ?></td>
					<td><?php echo $value->accountno ?></td>
					<td><?php echo $value->adharno ?></td>
					<td><?php echo $value->email ?></td>
					



					<td><a href="<?php echo base_url('index.php/Member_Controller/delete/'.$value->id) ?>"> Delete</a></td> 

				</tr>
			<?php }
		}
	 ?>
</body>
</html>