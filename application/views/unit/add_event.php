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

    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery-ui.min.css');?>">

    <script src="<?php echo base_url('admin/js/date_picker.js')?>"></script>
    <script src="<?php echo base_url('admin/js/jquery2.min.js')?>"></script>
    <script src="<?php echo base_url('admin/js/jquery-ui2.min.js')?>"></script>

    <script src="<?php echo base_url('admin/js/jquery.timepicker.js')?>"></script>
    <script src="<?php echo base_url('admin/js/jquery.timepicker.min.js')?>"></script>


    <script type="text/javascript">
        $(function() {
            // $( "#startdate" ).datepicker();
            $('#date').datepicker({ dateFormat: 'yy-mm-dd' }).val();
        });


        $(document).ready(function(){
            $('#time').timepicker();
            $('#time').on('click', function(){
                $('#spanExample').timepicker('show');
            });
        });

    </script>

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
            <a class="navbar-brand" href="#">E-Kudumbasree - <?php echo $_SESSION['username'] ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                <li><a href="<?php echo base_url('unit/logout') ?>">logout</a></li>
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
            <?php echo unit_menu('unit-events')?>
        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">


            <h1 class="page-header">
                Dashboard
            </h1>


            <div class="event_head">
	<h1><font color="red">ADD EVENTS</font></h1>
	<form action="<?php echo base_url($_SESSION['username'].'/unit-events/add/submit'); ?>" method="post">
	<div class="form-group col-md-6">
		<label for="name">Event Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder=" Name" required=""></br></div>
	
	<div class="form-group col-md-6">
		<label for="type">Event Type</label>
			<input type="text" class="form-control" name="type" id="type" placeholder="Type" required=""></br></div>
	

	<div class="form-group col-md-6">
		<label for="time">Event Time</label>
			<input type="text" class="form-control" name="time" id="time" placeholder="00:00" required=""></br></div>
	
	<div class="form-group col-md-6">
		<label for="date">Event Date</label>
			<input type="text" class="form-control" name="date" id="date" placeholder="yyyy/mm/dd" required=""></br></div>
	
	<div class="form-group col-md-6">
		<label for="venue">Event Venue</label>
			<input type="text" class="form-control" name="venue" id="venue" placeholder="Venue" required=""></br></div>
	
	<div class="form-group col-md-6">
		<label for="description">Event Description</label>
			<input type="text" class="form-control" name="description" id="description" placeholder="Description"></br></div>
	
	<div class="grp_btn">
		<button class="btn btn-default">Submit</button>
		<input class="btn btn-danger" type="reset" name="reset" id="reset" value="RESET">
		</div>
	</form>
	</div>

        </div><!--/row-->
    </div>
</div><!--/.container-->

<footer>
    <p class="pull-right"></p>
</footer>

<!-- script references -->
<!--<script src="--><?php //echo base_url('admin/js/jquery.min.js') ?><!--"></script>-->
<script src="<?php echo base_url('admin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('admin/js/scripts.js') ?>"></script>
</body>
</html>