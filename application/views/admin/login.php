<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="login-box">
	<?php echo form_open(base_url('User_Controller/verify'), ['id' => 'loginform', 'name' => 'loginform' ]);
	echo validation_errors();
	?>

		<h1>Login</h1>
		<div class="group">
			<!-- //<label for="username">User Name</label>  -->
			<input type="text" name="username" id="username" value="" placeholder="User Name">
			<span></span>
		</div>
		<div class="group">
			 <!-- <label for="password">Password</label>  -->
			<input type="password" name="password" id="password" value="" placeholder="Password">
			<span></span>
		</div>
		<div class="group pull-right">
			<input type="submit" name="submit" value="submit" class="btn-submit">
		</div>
	</form>
</div>
</body>
</html>