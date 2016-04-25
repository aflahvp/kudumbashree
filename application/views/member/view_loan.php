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
            <?php echo member_menu('loan')?>
        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">

            <!--toggle sidebar button-->
            <p class="visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
            </p>

            <h1 class="page-header">
                Dashboard
            </h1>

            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
                <?php //echo "<pre>";print_r($loan);?>

                <?php if (isset($loan)): ?>
                    <?php  echo $loan; ?>
                <?php endif ?>
                <?php if (isset($message)): ?>
                  <?php echo $message ?>
                <?php endif ?>

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