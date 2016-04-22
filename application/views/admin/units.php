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

            <?php echo form_open(base_url('dashboard/units/add/submit'), ['id' => 'addunits', 'name' => 'addunits']); ?>
        <div class="form">
            <br/>
            <div class="from-group col-md-6">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="">
            </div>
            <div class="form-group col-md-5">
               <label for="ward">Ward</label>
               <input class="form-control" type="text" name="ward" id="ward" value="">
            </div>
            <div class="form-group col-md-6">
                <lable for="address">Adress</lable>
                <textarea class="form-control" name="address" id="address" value=""></textarea>
            </div>
            <div class="form-group col-md-5">
                <label for="place">Place</label>
                <input class="form-control" type="text" name="place" id="place" value="">
            </div>

            <div class="form-group col-md-5">
                <label for="usertype">User Type</label>
                <select class="form-control" name="usertype" id="usertype">
                    <option value="" selected="" disabled="">select</option>
                    <option value="secretary"  <?php echo  set_select('usertype', 'secretary' ); ?>>----Secretary----</option>
                    <option value="member1"  <?php echo  set_select('usertype', 'member1' ); ?>>----Member1----</option>
                    <option value="member2"  <?php echo  set_select('usertype', 'member2' ); ?>>----Member2----</option>
                </select>
            </div>


           <div class="form-group col-md-6">
             <label for="username">User Name</label>
             <input class="form-control" type="text" name="username" id="username" placeholder="User Name">
           </div>

            <div class="form-group col-md-5">
             <label for="password">Password</label>
             <input class="form-control" type="password" name="password" id="password" placeholder=" PassWord">
            </div>
            <div class="form-group col-md-5 txt-center" style="text-align: center;margin-left: 25%">
                <input type="submit" name="submit" value="Submit" class="btn btn-default">
                <a href="<?php echo base_url('dashboard/units') ?>" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>
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