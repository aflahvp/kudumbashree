<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title><?php echo ucfirst($currentPage); ?> Kudumba sree</title>
  <link rel="stylesheet" href="<?php echo base_url('css/styleapp.css');?>">
  <script type="text/javascript" src="<?php echo base_url('js/appjs.js');?>"></script>
  <style>
      #img{
          width: 10px;
          height: 10px;
      }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <div class="left-wrapper">
      <?php echo dashboard_menu('members');?>
    </div>
  
    <nav class="top-wrapper">
      <div class="sidebar-top">
        <button class="humburger pull-left">
          <i class="fa fa-bars fa-2x center-block"></i>
        </button>
        <ul class="menu-top pull-right">
          <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
          <li>
            <a href="<?php echo base_url('dashboard/logout');?>">logout</a>
          </li>
        </ul>
      </div>
    </nav>

	<form name="registration" method="POST" action="<?php echo base_url('Member_Controller/add_member'); ?>" onsubmit="return fun(this);">
	<?php echo validation_errors(); ?>
		<div class="left">
			<div class="group">
				<label for="username"> USER NAME</label>
				<input type="text" name="username" id="username" placeholder="User Name" value="<?php echo set_value('username') ?>" >
			</div>


			<div class="group">
				<label for="password">PASSWORD</label>
				<input type="password" name="password" id="password" placeholder=" Password" required value="<?php echo set_value('password') ?>" >
			</div>

			<div class="group">
				<label for="confirmpassword">CONFIRM PASSWORD</label>	
				<input type="password" name="confirmpassword" id="confirmpassword" placeholder=" Confirm Password" value="<?php echo set_value('confirmpassword') ?>">
			</div>

			<div class="group">
				<label for="name">Name</label>	
				<input type="text" name="name" id="name" value="<?php echo set_value('name') ?>">
			</div>

			<div class="group">
				<label for="age">Age</label>	
				<input type="text" name="age" id="age" value="<?php echo set_value('age') ?>">
			</div>

			<div class="group">
			<span>DOB</span>
			<div class="width-60 pull-right">
				<div class="width-33 pull-left">
				<select name="day" >
					<?php for($i=1; $i<=31; $i++) { ?>
						<option value="<?php echo $i ?>"><?php echo $i ?></option>
					<?php } ?>		
				</select>
				</div>
				
				<div class="width-33 pull-left">
				<select name="month" >
				<?php for ($i=1; $i <=12 ; $i++) {?> 
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
					
				<?php } ?>
				</select>
				</div>

				<div class="width-33 pull-left">
				<select name="year" id="year">
				<?php for ($i=1900; $i<=2016 ; $i++) {?> 
					<option value="<?php echo $i ?>"><?php echo $i ?></option>

				<?php } ?>
				</select>
				</div>
			</div>
			<?php echo form_error('') ?>
			</div>

			<div class="group">
				<label for="address">Address</label>	
				<textarea name="address" id="address" cols="10" rows="3"><?php echo set_value('address') ?></textarea>
			</div>

			<div class="group">
				<label for="place">Place</label>	
				<input type="text" name="place" id="place" value="<?php echo set_value('place') ?>">
			</div>

			<div class="group">
				<label for="spousesname">Spouses name</label>	
					<input type="text" name="spousesname" id="spousesname" value="<?php echo set_value('spousesname') ?>">
			</div>

			<div class="group">
				<label for="fathername">Father name</label>	
				<input type="text" name="fathername" id="fathername" value="<?php echo set_value('fathername') ?>">
			</div>

			<div class="group">
				<label for="mothername">Mother name</label>
				<input type="text" name="mothername" id="mothername" value="<?php echo set_value('mothername') ?>">
			</div>
		</div>

		<div class="right">
			<div class="group">
				<label for="mobileno">Mobile number</label>	
				<input type="text" name="mobileno" id="mobileno" value="<?php echo set_value('mobileno') ?>">
			</div>

			<div class="group">
				<label for="accountno">Account number</label>	
				<input type="text" name="accountno" id="accountno" value="<?php echo set_value('accountno') ?>">
			</div>

			<div class="group">
				<label for="adharno">Adhar number</label>	
			<input type="text" name="adharno" id="adharno" value="<?php echo set_value('adharno') ?>">
			</div>

			<div class="group">
					<label for="email">E-mail id</label>	
			<input type="email" name="email" id="email" placeholder="test@mail.com" value="<?php echo set_value('email') ?>">
			</div>

			<div class="group">
				<label for="taluk">Taluk</label>	
				<input type="text" name="taluk" id="taluk" value="<?php echo set_value('taluk') ?>">
			</div>

			<div class="group">
				<label for="panchayath">Panchayath</label>	
				<input type="text" name="panchayath" id="panchayath" value="<?php echo set_value('panchayath') ?>">
			</div>

			<div class="group">
			<label for="district">District</label>	
			<select class="width-60" name="district" id="district">
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


			<div class="group">
				<label for="cast">Cast</label>
				<input type="text" name="cast" id="cast" value="<?php echo set_value('cast') ?>">
			</div>

			<div class="group">
				<label for="religion">Religion</label>
				<select class="width-60" name="religion" id="religion">
					<option value="" selected="" disabled="">select</option>
			  		<option value="hindu" <?php echo  set_select('religion', 'hindu'); ?>>HINDU</option>
			  		<option value="muslim"  <?php echo  set_select('religion', 'muslim'); ?>>MUSLIM</option>
			  		<option value="christian"  <?php echo  set_select('religion', 'christian'); ?>>CHRISTIAN</option>
			  		<option value="other"  <?php echo  set_select('religion', 'other'); ?>>OTHER</option>
			  	</select>
			</div>

			<div class="group">
			  	<span class="width-50">Ration card type</span>
			  	<div class="radio">
				  	<label for="apl">APL</label>
					<input type="radio"  name="ration" id="apl" value="<?php echo set_radio('ration', 'apl' ); ?> " >
				</div>	
				<div class="radio">
					<label for="apl">BPL</label>
					<input type="radio"  name="ration" id="bpl" value="<?php echo set_radio('ration', 'bpl') ?> " >
			  	</div>
			</div>
			
			<div class="group">
				<label for="eligibility">Eligibility</label>	
				<select class="width-60" name="eligibility" id="eligibility">
			  		<option value="" selected="" disabled="">select</option>
			  		<option value="sslc" <?php echo  set_select('eligibility', 'sslc' ); ?>>SSLC</option>
			  		<option value="highersecondary" <?php echo  set_select('eligibility', 'highersecondary'); ?>>Higher secondary</option>
			  		<option value="ug" <?php echo  set_select('eligibility', 'ug' ); ?>>UG</option>
			  		<option value="pg" <?php echo  set_select('eligibility', 'pg'); ?>>PG</option>
			  		<option value="other" <?php echo  set_select('eligibility', 'other' ); ?>>OTHER</option>
			  	</select>
			</div>

			<div class="group">
				<label for="bloodgroup">Blood group</label>
				<select class="width-60" name="bloodgroup" id="bloodgroup">
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
		</div> <!-- right div -->

		<div class="group">
			<div class="btn-grp">
				<button class="button">Submit</button>
				<input class="button" type="reset" value="Reset">
				<button class="button">Cancel</button>
			</div>
		</div>

	</form>
	</div>
</body>
</html>
