
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Slick Login</title>
<meta name="description" content="slick Login">
<link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>">
</head>
<body>
<?php echo form_open(base_url('unit-login/verify'), ['id' => 'loginform', 'name' => 'loginform', 'id' => 'slick-login' ]);
	echo validation_errors();?>
<label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="me@tutsplus.com">
<label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">
<input type="submit" value="Log In">
</form>
</body>
</html>