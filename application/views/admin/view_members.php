 <!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title>  Member </title>
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
	<?php 
		if (isset($result) ) {
			?>
			<table class="table">
				<thead class="header">
					<tr>
						<td>id</td>
						<td>name</td>
						<td>age</td>
						<td>dob</td>
						<td>address</td>
						<td>place</td>
						<td>sposesname</td>
						<td>fathername</td>
						<td>mothername</td>
						<td>rationcardtype</td>
						<!-- <td>category</td> -->
						<td>bloodgroup</td>
						<td>eligibility</td>
						<td>religion</td>
						<td>cast</td>
						<td>district</td>
						<td>taluk</td>
						<td>panchayath</td>
						<td>mobileno</td>
						<td>accountno</td>
						<td>adharno</td>
						<td>email</td>
						<td><a href="<?php echo base_url('dashboard/members/add') ?>">add</a></td>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($result as $key => $value) {?>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->age ?></td>
					<td><?php echo $value->dob?></td>
					<td><?php echo $value->address ?></td>
					<td><?php echo $value->place ?></td>
					<td><?php echo $value->spousesname ?></td>
					<td><?php echo $value->fathername ?></td>
					<td><?php echo $value->mothername ?></td>
					<td><?php echo $value->rationcardtype ?></td>
				
					<td><?php echo $value->bloodgroup?></td>
					<td><?php echo $value->eligibility ?></td>
					<td><?php echo $value->religion ?></td>
					<td><?php echo $value->cast ?></td>
					<td><?php echo $value->district ?></td>
					<td><?php echo $value->taluk ?></td>
					<td><?php echo $value->panchayath ?></td>
					<td><?php echo $value->mobileno ?></td>
					<td><?php echo $value->accountno ?></td>
					<td><?php echo $value->adharno ?></td>
					<td><?php echo $value->email ?></td>
					<td><a href="<?php echo base_url('dashboard/members/delete/'.$value->id) ?>" onclick = "return confirm('Are you sure to delete this?');"> Delete</a></td> 
				</tr>
				<?php } }?>
			</tbody>
			</table>
		
		<?php if (isset($message)) {
			echo $message;
		} ?>
  </div>
</body>
</html>