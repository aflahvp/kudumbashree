<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Units</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/unitstyle.css">
</head>
<body>
<div class="unit-box">
<h1>Add Units</h1>
<br>

<?php echo form_open('Unit_Controller/add_unit', ['id' => 'addunits', 'name' => 'addunits']);
echo validation_errors();
?>
 
 	<div class="group">
		<label for="username">Name</label>
		<input type="text" name="username" id="username" value="">
 	</div>
  	<div class="group">
       <label for="ward">Ward</label>
  	   <input type="text" name="ward" id="ward" value="">
	</div>
    <div class="group">
		<lable for="address">Adress</lable>
		<textarea name="address" id="address" value=""></textarea>
  	</div>
  	<div class="group">
  		<label for="place">Place</label>	
	  	<input type="text" name="place" id="place" value="">
  	</div>	
   <div class="group">
	 <label for="username">User name</label>
	 <input type="text" name="username" id="username">
   </div>
	<div class="group">
	 <label for="password">Password</label>
	 <input type="text" name="password" id="password">
		</div>
	<div class="group txt-center">
		<input type="submit" name="submit" value="Submit" class="btn-submit">
		<input type="submit" name="submit" value="Cancel" class="btn-submit">
	</div>
</form>
</body>
</html>