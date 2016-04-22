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
            <?php echo unit_menu('unit-products')?>
        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">

            <!--toggle sidebar button-->
            <p class="visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
            </p>

            <h1 class="page-header">
                Dashboard
            </h1>

	<?php echo form_open(base_url($_SESSION['username'].'/unit-products/add/submit'), ['id' => 'addproducts', 'name' => 'addproducts', 'method' => 'post']); ?>

		<div class="form-group col-md-6">
			<label for="username">Name</label>
			<input class="form-control" type="text" name="name" id="username" value="">
	 	</div>

		 <!-- <label>NAME<input cla type="text" name="name" value=""></label> -->

		 <div class="form-group col-md-6">
			<label for="username">Description</label>
			<input class="form-control" type="text" name="description" id="description" value="">
	 	</div>
		 <!-- <label>DISCRIPTION<input cla type="text" name="description" value=""></label> -->

		 <div class="form-group">
			<input type="submit" name="submit" value="submit" class="btn btn-default">
		</div>
		 <!-- <input type="submit" name="submit" value="SUBMIT"> -->
  </form>
  <?php if (isset($error)): ?>
    <?php echo $error ?>
  <?php endif ?>


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