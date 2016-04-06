<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title><?php echo ucfirst($currentPage); ?> E-Kudumbashree</title>
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

	<?php echo form_open(base_url('dashboard/products/add/submit'), ['id' => 'addproducts', 'name' => 'addproducts', 'method' => 'post']);
	echo validation_errors();
	?>

		<div class="group">
			<label for="username">Name</label>
			<input type="text" name="name" id="username" value="">
	 	</div>

		 <!-- <label>NAME<input type="text" name="name" value=""></label> -->

		 <div class="group">
			<label for="username">Description</label>
			<input type="text" name="description" id="description" value="">
	 	</div>
		 <!-- <label>DISCRIPTION<input type="text" name="description" value=""></label> -->

		 <div class="group txt-center">
			<input type="submit" name="submit" value="SUBMIT" class="btn-submit">

			<input type="reset" name="cancel" value="Cancel" class="btn-submit">
		</div>
		 <!-- <input type="submit" name="submit" value="SUBMIT"> -->
	</div>
	</form>

	</body>

</html>