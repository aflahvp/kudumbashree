<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add member</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/addmemberstyle.css">
</head>
<body>
<div class="member-box">
	<h1>Add member</h1>
	<?php echo form_open('Member_Controller/add_member', ['id' => 'addmember', 'name' => 'addmember']);
echo validation_errors();
?>
	<div class="group">
	<label for="name">Name</label>	
	<input type="text" name="name" id="name" value="<?php echo set_value('name') ?>">
	</div>
	<div class="group">
	<label for="age">Age</label>	
	<input type="text" name="age" id="age" value="<?php echo set_value('age') ?>">
	</div>
	<div class="group">
	<label for="dob">Date of birth</label>	
	<input type="text" name="dob" id="dob" value="<?php echo set_value('dob') ?>">
	</div>
	<div class="group">
	<label for="address">Address</label>	
	<textarea name="address" id="address" value="<?php echo set_value('address') ?>"></textarea>
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
  	<div class="group">
  	<span>Ration card type</span>
  	<label for="apl">APL</label>	
	<input type="radio" name="apl" id="apl" value="apl" <?php echo  set_radio('apl', 'apl', TRUE); ?> / >
	<label for="bpl">BPL</label>
	<input type="radio" name="apl" id="bpl" value="bpl" <?php echo  set_radio('apl', 'bpl', TRUE); ?> / >
  	</div>
  	<div class="group">
  	<label for="category">Category</label>
  	<select name="category" id="category">
  		<option value="sc" <?php echo  set_select('category', 'sc', TRUE); ?>>SC</option>
  		<option value="st" <?php echo  set_select('category', 'st', TRUE); ?>>ST</option>
  		<option value="obc" <?php echo  set_select('category', 'sobc', TRUE); ?>>OBC</option>
  		<option value="geneal" <?php echo  set_select('category', 'general', TRUE); ?>>General</option>
  	</select>
  	</div>
	<div class="group">
	<label for="bloodgroup">Blood group</label>
	<select name="bloodgroup" id="bloodgroup">
  		<option value="o+" <?php echo  set_select('bloodgroup', 'o+', TRUE); ?>>O+</option>
  		<option value="o-" <?php echo  set_select('bloodgroup', 'o-', TRUE); ?>>O-</option>
  		<option value="a+" <?php echo  set_select('bloodgroup', 'a+', TRUE); ?>>A+</option>
  		<option value="a-" <?php echo  set_select('bloodgroup', 'a-', TRUE); ?>>A-</option>
  		<option value="b+" <?php echo  set_select('bloodgroup', 'b+', TRUE); ?>>B+</option>
  		<option value="b-" <?php echo  set_select('bloodgroup', 'b-', TRUE); ?>>B-</option>
  		<option value="ab+" <?php echo  set_select('bloodgroup', 'ab+', TRUE); ?>>AB+</option>
  		<option value="ab-" <?php echo  set_select('bloodgroup', 'ab-', TRUE); ?>>AB-</option>
  	</select>
	</div>
	<div class="group">
	<label for="eligibility">Eligibility</label>	
	<select name="eligibility" id="eligibility">
  		<option value="sslc" <?php echo  set_select('eligibility', 'sslc', TRUE); ?>>SSLC</option>
  		<option value="highersecondary" <?php echo  set_select('eligibility', 'highersecondary', TRUE); ?>>Higher secondary</option>
  		<option value="ug" <?php echo  set_select('eligibility', 'ug', TRUE); ?>>UG</option>
  		<option value="pg" <?php echo  set_select('eligibility', 'pg', TRUE); ?>>PG</option>
  		<option value="other" <?php echo  set_select('eligibility', 'other', TRUE); ?>>OTHER</option>
  	</select>
	</div>
	<div class="group">
	<label for="religion">Religion</label>
	<select name="religion" id="religion">
  		<option value="hindu" <?php echo  set_select('religion', 'hindu', TRUE); ?>>HINDU</option>
  		<option value="muslim"  <?php echo  set_select('religion', 'muslim', TRUE); ?>>MUSLIM</option>
  		<option value="christian"  <?php echo  set_select('religion', 'christian', TRUE); ?>>CHRISTIAN</option>
  		<option value="other"  <?php echo  set_select('religion', 'other', TRUE); ?>>OTHER</option>
  	</select>
	</div>
	<div class="group">
	<label for="cast">Cast</label>
	<input type="cast" name="cast" id="cast" value="<?php echo set_value('cast') ?>">
	</div>
	<div class="group">
	<label for="district">District</label>	
	<select name="district" id="district">
  		<option value="alappuza"  <?php echo  set_select('district', 'alappuza', TRUE); ?>>Alappuza</option>
  		<option value="eranakulam"  <?php echo  set_select('district', 'eranakulam', TRUE); ?>>Eranakulam</option>
  		<option value="idukki"  <?php echo  set_select('district', 'idukki', TRUE); ?>>Idukki</option>
  		<option value="kannur" <?php echo  set_select('district', 'kannur', TRUE); ?>>Kannur</option>
  		<option value="kasergod" <?php echo  set_select('district', 'kasergod', TRUE); ?>>Kasergod</option>
  		<option value="kollam" <?php echo  set_select('district', 'kollam', TRUE); ?>>Kollam</option>
  		<option value="kottayam" <?php echo  set_select('district', 'kottayam', TRUE); ?>>Kottayam</option>
  		<option value="kozhikode" <?php echo  set_select('district', 'kozhikode', TRUE); ?>>Kozhikode</option>
  		<option value="malappuram" <?php echo  set_select('district', 'malappuram', TRUE); ?>>Malappuram</option>
  		<option value="palakad" <?php echo  set_select('district', 'palakad', TRUE); ?>>Palakkad</option>
		<option value="pathanamthitta" <?php echo  set_select('district', 'pathanamthitta', TRUE); ?>>Pathanamthitta</option>
  		<option value="thiruvanathapuram" <?php echo  set_select('district', 'thiruvanathapuram', TRUE); ?>>Thiruvananthapuram</option>
  		<option value="thrissur" <?php echo  set_select('district', 'waynad', TRUE); ?>>Thrissur</option>
  		<option value="waynad" <?php echo  set_select('district', 'waynad', TRUE); ?>>Wayanad</option>
  	</select>
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
	<input type="text" name="email" id="email" value="<?php echo set_value('email') ?>">
	</div>	
	<div class="group txt-center">
		<input type="submit" name="submit" value="submit" id="submit" class="btn-submit">
		<input type="reset" name="rest" value="reset" id="reset" class="btn-submit">
		<input type="button" name="cancel" value="cancel" id="cancel" class="btn-submit">
	</div>
</form>
</body>
</html>