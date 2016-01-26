<?php 

if (isset($_SESSION['logged_in']) != TRUE) {
	redirect('User_Controller/login');
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dashboard</title>
</head>
<body>
	welcome to admin
	<a href="<?php echo base_url('index.php/User_Controller/logout');?>"> Logout</a>
</body>
</html>