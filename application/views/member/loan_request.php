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
            <div>

                <form name="loan" method="POST" action="<?php echo base_url($_SESSION['username'].'/loan/apply/submit'); ?>" >
                    <div>
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="bname">Bank name</label>-->
<!--                            <input class="form-control" type="text" name="bname" id="bankname" required></br>-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="acno">Account no</label>-->
<!--                            <input class="form-control" type="text" name="accountno" id="accountno" required></br>-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="loantype">Loan type</label>-->
<!--                            <input class="form-control" type="text" name="loantype" id="loantype" required></br>-->
<!--                        </div>-->
                        <div class="form-group col-md-6">
                            <label for="mobno">Mobile no</label>
                            <input class="form-control" type="text" name="mobno" id="mobno" required></br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="example@example.com"></br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="loanamt">Loan amount</label>
                            <input class="form-control" type="number" name="loanamt" id="loanamt" required></br>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-default">SUBMIT</button>
                            <input type="reset" class="btn btn-danger" name="reset" id="reset" value="RESET">
                        </div>
                        <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id; ?>">
                    </div>
                </form>
            </div>

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