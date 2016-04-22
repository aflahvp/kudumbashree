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
            $('#dob').datepicker({ dateFormat: 'yy-mm-dd' }).val();
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
            <?php echo unit_menu('unit-members')?>
        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">


            <h1 class="page-header">
                Dashboard
            </h1>


            <script language="javascript" type="text/javascript">
                function check(input){
                    if (input.value != document.getElementById('password').value) {
                        input.setCustomValidity('Password Must be matching');
                    }else {
                        /*input is valid --rest the error message*/
                        input.setCustomValidity('');
                    }
                }
            </script>



            <h2 class="sub-header">Add member</h2>
	        <form name="registration" method="POST" action="<?php echo base_url($_SESSION['username'].'/unit-members/add/submit'); ?>">

			<div class="form-group col-md-6">
				<label for="username"> User name</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="User Name" value="<?php echo set_value('username') ?>" required="">
			</div>


			<div class="form-group col-md-6">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder=" Password" required value="<?php echo set_value('password') ?>" >
			</div>

			<div class="form-group col-md-6">
				<label for="confirmpassword">Confirm Password</label>
				<input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder=" Confirm Password" value="<?php echo set_value('confirmpassword') ?>" oninput="check(this)">
			</div>

			<div class="form-group col-md-6">
				<label for="name">Name</label>	
				<input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name') ?>" required="">
			</div>

			<div class="form-group col-md-6">
				<label for="age">Age</label>	
				<input type="text" class="form-control" name="age" id="age" value="<?php echo set_value('age') ?>">
			</div>

			<div class="form-group col-md-6">
                <label for="dob">D O B</label>
                <input type="text" class="form-control" name="dob" id="dob" >
			</div>

			<div class="form-group col-md-6">
				<label for="address">Address</label>	
				<textarea class="form-control" name="address" id="address" cols="10" rows="3" required=""><?php echo set_value('address') ?></textarea>
			</div>

			<div class="form-group col-md-6">
				<label for="place">Place</label>	
				<input type="text" class="form-control" name="place" id="place" value="<?php echo set_value('place') ?>" required="">
			</div>

			<div class="form-group col-md-6">
				<label for="spousesname">Spouses name</label>	
					<input type="text" class="form-control" name="spousesname" id="spousesname" value="<?php echo set_value('spousesname') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="fathername">Father name</label>	
				<input type="text" class="form-control" name="fathername" id="fathername" value="<?php echo set_value('fathername') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="mothername">Mother name</label>
				<input type="text" class="form-control" name="mothername" id="mothername" value="<?php echo set_value('mothername') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="mobileno">Mobile number</label>	
				<input type="text" class="form-control" name="mobileno" id="mobileno" required="" value="<?php echo set_value('mobileno') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="accountno">Account number</label>	
				<input type="text" class="form-control" name="accountno" id="accountno" value="<?php echo set_value('accountno') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="adharno">Adhar number</label>	
			<input type="text" class="form-control" name="adharno" id="adharno" value="<?php echo set_value('adharno') ?>">
			</div>

			<div class="form-group col-md-6">
					<label for="email">E-mail id</label>	
			<input class="form-control" type="email" name="email" id="email" placeholder="test@mail.com" value="<?php echo set_value('email') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="taluk">Taluk</label>	
				<input type="text" class="form-control" name="taluk" id="taluk" value="<?php echo set_value('taluk') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="panchayath">Panchayath</label>	
				<input type="text" class="form-control" name="panchayath" id="panchayath" value="<?php echo set_value('panchayath') ?>">
			</div>

			<div class="form-group col-md-6">
			<label for="district">District</label>	
			<select class="form-control" name="district" id="district">
		  		<option value="" selected="" disabled="">select</option>
		  		<option value="alappuza"  <?php echo  set_select('district', 'alappuza' ); ?>>----Alappuza----</option>
		  		<option value="eranakulam"  <?php echo  set_select('district', 'eranakulam' ); ?>>----Eranakulam----</option>
		  		<option value="idukki"  <?php echo  set_select('district', 'idukki' ); ?>>----Idukki----</option>
		  		<option value="kannur" <?php echo  set_select('district', 'kannur' ); ?>>----Kannur----</option>
		  		<option value="kasergod" <?php echo  set_select('district', 'kasergod' ); ?>>----Kasergod----</option>
		  		<option value="kollam" <?php echo  set_select('district', 'kollam'); ?>>----Kollam----</option>
		  		<option value="kottayam" <?php echo  set_select('district', 'kottayam'); ?>>----Kottayam----</option>
		  		<option value="kozhikode" <?php echo  set_select('district', 'kozhikode' ); ?>>----Kozhikode----</option>
		  		<option value="malappuram" <?php echo  set_select('district', 'malappuram' ); ?>>----Malappuram----</option>
		  		<option value="palakad" <?php echo  set_select('district', 'palakad'); ?>>----Palakkad----</option>
				<option value="pathanamthitta" <?php echo  set_select('district', 'pathanamthitta'); ?>>----Pathanamthitta----</option>
		  		<option value="thiruvanathapuram" <?php echo  set_select('district', 'thiruvanathapuram'); ?>>----Thiruvananthapuram----</option>
		  		<option value="thrissur" <?php echo  set_select('district', 'waynad' ); ?>>----Thrissur----</option>
		  		<option value="waynad" <?php echo  set_select('district', 'waynad'); ?>>----Wayanad----</option>
		  	</select>
			</div>


			<div class="form-group col-md-6">
				<label for="cast">Cast</label>
				<input type="text" class="form-control" name="cast" id="cast" value="<?php echo set_value('cast') ?>">
			</div>

			<div class="form-group col-md-6">
				<label for="religion">Religion</label>
				<select class="form-control" name="religion" id="religion">
					<option value="" selected="" disabled="">select</option>
			  		<option value="hindu" <?php echo  set_select('religion', 'hindu'); ?>>HINDU</option>
			  		<option value="muslim"  <?php echo  set_select('religion', 'muslim'); ?>>MUSLIM</option>
			  		<option value="christian"  <?php echo  set_select('religion', 'christian'); ?>>CHRISTIAN</option>
			  		<option value="other"  <?php echo  set_select('religion', 'other'); ?>>OTHER</option>
			  	</select>
			</div>

			<div class="form-group col-md-6">
                <label for="">Ration card type</label>
			  	<div class="radio">
				  	<label for="apl">APL</label>
					<input class="radio " type="radio"  name="ration" id="apl" value="<?php echo set_radio('ration', 'apl' ); ?> " >
				</div>	
				<div class="radio">
					<label for="apl">BPL</label>
					<input type="radio" class="radio" name="ration" id="bpl" value="<?php echo set_radio('ration', 'bpl') ?> " >
			  	</div>
			</div>
			
			<div class="form-group col-md-6">
				<label for="eligibility">Eligibility</label>	
				<select class="form-control" name="eligibility" id="eligibility">
			  		<option value="" selected="" disabled="">select</option>
			  		<option value="sslc" <?php echo  set_select('eligibility', 'sslc' ); ?>>SSLC</option>
			  		<option value="highersecondary" <?php echo  set_select('eligibility', 'highersecondary'); ?>>Higher secondary</option>
			  		<option value="ug" <?php echo  set_select('eligibility', 'ug' ); ?>>UG</option>
			  		<option value="pg" <?php echo  set_select('eligibility', 'pg'); ?>>PG</option>
			  		<option value="other" <?php echo  set_select('eligibility', 'other' ); ?>>OTHER</option>
			  	</select>
			</div>

			<div class="form-group col-md-6">
				<label for="bloodgroup">Blood group</label>
				<select class="form-control" name="bloodgroup" id="bloodgroup">
			  		<option value="" selected="" disabled="">select</option>
			  		<option value="o+" <?php echo  set_select('bloodgroup', 'o+' ); ?>>O+</option>
			  		<option value="o-" <?php echo  set_select('bloodgroup', 'o-' ); ?>>O-</option>
			  		<option value="a+" <?php echo  set_select('bloodgroup', 'a+'); ?>>A+</option>
			  		<option value="a-" <?php echo  set_select('bloodgroup', 'a-' ); ?>>A-</option>
			  		<option value="b+" <?php echo  set_select('bloodgroup', 'b+' ); ?>>B+</option>
			  		<option value="b-" <?php echo  set_select('bloodgroup', 'b-' ); ?>>B-</option>
			  		<option value="ab+" <?php echo  set_select('bloodgroup', 'ab+'); ?>>AB+</option>
			  		<option value="ab-" <?php echo  set_select('bloodgroup', 'ab-' ); ?>>AB-</option>
			  	</select>
			</div>

		<div class="form-group col-md-6">
				<button class="btn btn-default">Submit</button>
				<input class="btn btn-danger" type="reset" value="Reset">
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
<!--<script src="--><?php //echo base_url('admin/js/jquery.min.js') ?><!--"></script>-->
<script src="<?php echo base_url('admin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('admin/js/scripts.js') ?>"></script>
</body>
</html>