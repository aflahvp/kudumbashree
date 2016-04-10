<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/style.css">

	<style>
		#container
		{
			width:30%;
			height:45%;
			margin:5% 0% 0% 35%;
			background:#cccccc;
			background-position:center;
			border-radius:9px;
			box-shadow:0px 20px 20px black;
			/* box-shadow:rgb(22, 22, 22) 0px 10px 20px; */
			/* box-shadow:rgb(73, 73, 73) px 20px 20px ; */
			/* border-radius:9px; */
			/* border:5px #7A0029; */
			/* box-shadow:0px 0px 9px hsla(334,76%,57%,1.00); */
			/* box-shadow:0px 0px 5px black; */
			/* margin right:20%; */
		}
	</style>
</head>
<body>

<div class="login-box">
	<?php echo form_open(base_url('member/login/verify'), ['id' => 'loginform', 'name' => 'loginform' ]);
	echo validation_errors();
	?>
		<div id = "container"><br/>

		<h1 style="color:red;"><center>Member Login</center></h1><br/>
		<div class="group">
			<!-- //<label for="username">User Name</label>  -->
			<center><input type="text" name="username" id="username" value="" placeholder="User Name"></center><br/>
			<span></span>
		</div>
		<div class="group">
			 <!-- <label for="password">Password</label>  -->
			<center><input type="password" name="password" id="password" value="" placeholder="Password"></center><br/>
			<span></span>
		</div>
		<div class="group pull-right">
			<center><input type="submit" name="submit" value="submit" class="btn-submit" style="color:white;background:black;"></center>
		</div>
		<br/>
		</div>
	</form>
</div>
<?php if (isset($message)): ?>
	<div >
		<?php echo $message ?>
	</div>
<?php endif ?>
</body>
</html>