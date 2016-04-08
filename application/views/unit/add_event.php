<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title>E-Kudumbashree</title>
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
      <?php echo unit_menu('events');?>
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
            <a href="<?php echo base_url('unit/logout');?>">logout</a>
          </li>
        </ul>
      </div>
    </nav>

	<div class="event_head">
	<h1><font color="red">ADD EVENTS</font></h1>
	<?php echo validation_errors(); ?>
	<form action="<?php echo base_url($_SESSION['username'].'/unit-events/add/submit'); ?>" method="post">
	<div class="grp">
		<label for="name">Event Name</label>
			<input type="text" name="name" id="name" placeholder=" Name" required=""></br></div>
	
	<div class="grp">
		<label for="type">Event Type</label>
			<input type="text" name="type" id="type" placeholder="Type" required=""></br></div>
	

	<div class="grp">
		<label for="time">Event Time</label>
			<input type="time" name="time" id="time" placeholder="00:00" required=""></br></div>
	
	<div class="grp">
		<label for="date">Event Date</label>
			<input type="date" name="date" id="date" placeholder="0000/00/00" required=""></br></div>
	
	<div class="grp">
		<label for="venue">Event Venue</label>
			<input type="text" name="venue" id="venue" placeholder="Venue" required=""></br></div>
	
	<div class="grp">
		<label for="description">Event Description</label>
			<input type="text" name="description" id="description" placeholder="Description"></br></div>
	
	<div class="grp_btn">
		<button>SUBMIT</button>
		<input type="reset" name="reset" id="reset" value="RESET">
		<input type="button" name="cancel" id="cancel" value="CANCEL">
		</div>
	</form>
	</div>
</body>
</html>