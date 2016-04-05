<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title><?php echo ucfirst($currentPage); ?>  E-KUDUMBASHREE</title>
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
      <?php echo dashboard_menu('products');?>
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
	<h1><font color="red">LOAN</font></h1>
	<form name="loan" method="POST" action="<?php echo base_url('dashboard/loans/add'); ?>" onsubmit="return fun(this);">
	<label for="id">Id</label>
			<input type="text" name="id" id="id"></br>
	<label for="bname">Bank name</label>
			<input type="text" name="bname" id="bankname"></br>
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
	<label for="status">Status</label>
			<input type="text" name="status" id="status"></br>		
	<button>SUBMIT</button>
			<input type="reset" name="reset" id="reset" value="RESET">
			<input type="button" name="cancel" id="cancel" value="CANCEL">
	</form>		
	</div>
</body>
</html>