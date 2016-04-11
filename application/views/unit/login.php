
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Slick Login</title>
    <style>
        .btn-home {
            border: 2px solid transparent;
            background: #3498DB;
            color: #ffffff;
            font-size: 16px;
            line-height: 25px;
            padding: 5px 10px;
            text-decoration: none;
            text-shadow: none;
            border-radius: 3px;
            box-shadow: none;
            transition: 0.25s;
            width: 30px;
            margin: 0 auto;
        }

    </style>
<meta name="description" content="slick Login">
<link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>">
</head>
<body>
<?php echo form_open(base_url('unit-login/verify'), ['id' => 'loginform', 'name' => 'loginform', 'id' => 'slick-login' ]);
	echo validation_errors();?>
<a href="<?php echo base_url()?>" class="btn-home">home</a>
<label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="me@tutsplus.com">
<label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">
<input type="submit" value="Log In">
</form>
</body>
</html>