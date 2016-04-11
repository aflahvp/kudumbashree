<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="<?php echo base_url('css/normalize.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">

	<style>
		#container
		{
			width:35%;
			height:80%;
			margin:5% 0% 0% 35%;
			background:#cccccc;
			background-position:center;
			border-radius:9px;
			/* box-shadow:rgb(73, 73, 73) 0px 10px 20px; */
			box-shadow:0px 20px 20px black;
			/* margin right:20%; */

		}
	</style>
</head>
<body>

<div class="login-box">
	<?php echo form_open(base_url('User_Controller/verify'), ['id' => 'loginform', 'name' => 'loginform' , 'method' => 'post']);
	echo validation_errors();
	?>
		<div id = "container"><br/>
            <a href="<?php echo base_url();?>" class="btn btn-home">home</a>
		<h1 style="color:red;"><center>Admin Login</center></h1>
		<div class="group">

			<!-- <label for="username"><big><b>User Name</b></big></label>  -->
			<center><input type="text" name="username" id="username" value="" placeholder="User Name"></center><br/>
			<span></span>
		</div>
		<div class="group">
			 <!-- <label for="password">Password</label>  -->
			<center><input type="password" name="password" id="password" value="" placeholder="Password"></center><br/>
			<span></span>
		</div>
		<div class="group pull-right">
			<center><input type="submit" name="submit" value="SUBMIT" class="btn-submit" style="color:white;background:black;"></center>
		</div>
		
		<!-- <a href="application.html"> </a> -->
		<!-- <img src="pics/reaflah.png" width="45%" height="50%" align="right"> -->
		<br/><br/>

		</div>
	</form>
</div>
</body>
</html>