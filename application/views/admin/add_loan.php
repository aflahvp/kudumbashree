<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><font color="red">LOAN</font></h1>
	<form name="loan" method="POST" action="<?php echo base_url('Loan_Controller/add_loan'); ?>" onsubmit="return fun(this);">
	<label for="id">Id</label>
			<input type="text" name="id" id="id">></br>
	<label for="bname">Bank name</label>
			<input type="text" name="bname" id="bname"></br>
	<label for="acno">Account no</label>
			<input type="text" name="accountno" id="accountno"></br>
	<label for="loantype">Loan type</label>
			<input type="text" name="loantype" id="loantype"></br>
	<label for="mobno">Mobile no</label>
			<input type="text" name="mobno" id="mobno"></br>
	<label for="email">Email</label>
			<input type="email" name="email" id="email"></br>
	<label for="loanamt">Loan amount</label>
			<input type="text" name="loanamt" id="loanamt"></br>
	<button>SUBMIT</button>
		<input type="reset" name="reset" id="reset" value="RESET">
		<input type="button" name="cancel" id="cancel" value="CANCEL">		
	</form>		
										
</body>
</html>