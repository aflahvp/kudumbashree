<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add member</title>
</head>
<body>
	<?php echo form_open('Member_Controller/add_member', ['id' => 'addmember', 'name' => 'addmember']);
echo validation_errors();
?>
	
	Name: <input type="text" name="name" id="name"><br>
	Address: <textarea name="address" id="address"></textarea><br>
	Age :<input type="text" name="age" id="age"><br>
	Dob :<input type="text" name="dob" id="dob"><br>
	Address :<input type="text" name="address" id="address"><br>
	Spouses name :<input type="text" name="spouses name" id="spouses name"><br>
	Father name :<input type="text" name="father name" id="father name"><br>
	mother name :<input type="text" name="mother name" id="mother name"><br>
	Ration card type :<input type="radio" name="BPL" id="bpl">BPL
					<input type="radio" name="APL" id="apl">APL <br>
	Category :<input type="radio" name="SC" id="sc">sc
	         <input type="radio" name="ST" id="ST">ST
	         <input type="radio" name="Genaral" id="genaral">genaral<br>
	Blood group :<input type="text" name="blood group" id="blood group"><br>
	Eligibility :<input type="text" name="eligibility" id="eligibility"><br>
	Religion :<input type="text" name="religion" id="religion"><br>
	Cast :<input type="text" name="cast" id="cast"><br>
	Nationality :<input type="text" name="nationality" id="nationality"><br>
	State :<input type="state" name="state" id="state"><br>
	District :<input type="text" name="district" id="district"><br>
	Taluk :<input type="text" name="taluk" id="taluk"><br>
	Panchayath :<input type="text" name="panchayath" id="panchayath"><br>
	Mob No :<input type="text" name="mob no" id="mob no"><br>
	Account NO :<input type="text" name="account no" id="account no"><br>
	Adhar No :<input type="text" name="adhar no" id="adhar no"><br>
	Email id :<input type="text" name="email" id="email id"><br>
	<input type="submit" name="submit" value="submit" id="submit">
	<input type="reset" name="rest" value="reset" id="reset">
	<input type="button" name="cancel" value="cancel" id="cancel">
</form>
</body>
</html>