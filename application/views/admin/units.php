<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Units</title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Add Units</h1>
<br>

<?php echo form_open('Unit_Controller/add_unit', ['id' => 'loginform', 'name' => 'loginform']);
echo validation_errors();
?>
	Name :<input type="text" name="username" id="username" value=""><br>
  	Ward       :<input type="text" name="ward" id="ward" value=""><br>
	Address : <textarea name="address" id="address" value=""></textarea><br>
  	place   :<input type="text" name="place" id="place" value=""><br>
	username : <input type="text" name="username" id="username"><br>
	password : <input type="text" name="password" id="password"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>