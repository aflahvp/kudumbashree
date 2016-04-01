<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if (isset($result)): ?>
		<?php echo $result ?>
	<?php endif ?>


	<?php echo $value->id ?>


	<?php if (isset($message)): ?>
		<?php echo $message; ?>
	<?php endif ?>
</body>
</html>