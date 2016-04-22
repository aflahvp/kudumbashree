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
            <?php echo dashboard_menu('units')?>
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

        <?php
            if (isset($result) ) {

                ?>
                <div class="table-responsive">
            <table class="table">
                <thead class="header">
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>ward</td>
                        <td>address</td>
                        <td>place</td>
                        <td>username</td>
                        <td>pasword</td>
                        <td><a href="<?php echo base_url('dashboard/units/add') ?>">add</a></td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $key => $value) {?>
                    <tr>
                        <td><?php echo $value->id ?></td>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->ward ?></td>
                        <td><?php echo $value->address ?></td>
                        <td><?php echo $value->place ?></td>
                        <td><?php echo $value->username ?></td>
                        <td><?php echo $value->password ?></td>
                        <td><a href="<?php echo base_url('dashboard/units/delete/'.$value->id) ?>" onclick = "return confirm('Are you sure to delete this?');"> Delete</a></td>
                    </tr>
                <?php }
                 }

               if (isset($message)) {
                  echo $message;
                } ?>

                </tbody>
         </table>
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