<!doctype html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Dashboard E-Kudumbasree</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url('admin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('admin/css/styles.css') ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-Kudumbasree</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                <li><a href="<?php echo base_url('dashboard/logout') ?>">logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <!--            <ul class="nav nav-sidebar">-->
            <!--              <li class="active"><a href="#">Overview</a></li>-->
            <!--              <li><a href="" >Themes</a></li>-->
            <!--            </ul>-->
            <?php echo dashboard_menu('events')?>
        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">

            <!--toggle sidebar button-->
            <p class="visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
            </p>

            <h1 class="page-header">
                Dashboard
            </h1>

            <?php if (isset($result) and $result != false) {?>
            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
                <table class="table">
			<thead class="header">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>type</th>
					<th>time</th>
					<th>date</th>
					<th>venue</th>
					<th>description</th>
					<th><a href="<?php echo base_url('dashboard/events/add/submit'); ?>">Add</a></th>

				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $value) {?>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->type ?></td>
					<td><?php echo $value->time ?></td>
					<td><?php echo $value->date ?></td>
					<td><?php echo $value->venue ?></td>
					<td><?php echo $value->description ?></td>
					<td><a href="<?php echo base_url('dashboard/events/delete/'.$value->id) ?>" onclick = "return confirm('Are you sure to delete this?');">Delete</a></td>
				</tr>
		<?php } }?>
			</tbody>
			</table>
		
		<?php if (isset($message)) {
			echo $message;
			echo anchor('dashboard/events/add','add',['class' => 'button']);
		} ?>
            </div>


        </div><!--/row-->
    </div>
</div><!--/.container-->

<footer>
    <p class="pull-right"></p>
</footer>

<!-- script references -->
<script src="<?php echo base_url('admin/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('admin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('admin/js/scripts.js') ?>"></script>
</body>
</html>