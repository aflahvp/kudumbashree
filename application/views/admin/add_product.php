<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	echo form_open(base_url('Product_Controller/add'));
	 ?>
	 <label>NAME<input type="text" name="name" value=""></label>
	 <label>DISCRIPTION<input type="text" name="description" value=""></label>
	 <input type="submit" name="submit" value="SUBMIT">
	
</body>
</html>